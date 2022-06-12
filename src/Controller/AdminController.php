<?php

namespace App\Controller;



use App\Entity\Model;
use App\Entity\Stamp;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use function Doctrine\ORM\Mapping\getValue;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdminController extends AbstractController
{


    /**
     * @Route("/admin/models", name="models_page")
     */
    public function modelsAction(Request $request) {
        $doctrine = $this->getDoctrine();

        $stamps = $doctrine->getRepository(Stamp::class)->findAll();

        $searchfor = $request->query->get('searchfor');
        $searchstamps = $request->query->get('searchstamps');

        if ($searchfor) {

            $models = $doctrine->getRepository(Model::class)->findBy([
                'name' => $searchfor,
            ]);
            $stamp = '';

        } elseif ($searchstamps) {

            $models = $doctrine->getRepository(Model::class)->findBy([
                'stamp_id' => $searchstamps,
            ]);
            $stamp = $doctrine->getRepository(Stamp::class)->findOneBy([
                'id' => $searchstamps
            ]);

        } else {

            $models = $doctrine->getRepository(Model::class)->findBy([], [
                'name' => 'asc'
            ]);
            $stamp = '';
        }


        return $this->render('admin/models.html.twig', [
            'models' => $models,
            'searchfor' => $searchfor,
            'searchstamps' => $searchstamps,
            'stamps' => $stamps,
            'stamp' => $stamp,
        ]);
    }
    /**
     * @Route("/admin/model/{id}", name="edit_model", methods={"get"})
     * @IsGranted("ROLE_MANAGER")
     */
    public function editModel($id) {

        $model = $this->getDoctrine()->getRepository(Model::class)->findOneBy([
            'id' => $id
        ]);
        if($model) {
            $stamps = $this->getDoctrine()->getRepository(Stamp::class)->findOneBy([
                'id' => $model->getStampId(Model::class)
            ]);
            $perm = 1;
        } else {
            $stamps = $this->getDoctrine()->getRepository(Stamp::class)->findAll();
            $model = new Model();
            $perm = 0;
        }


        return $this->render('admin/edit_model.html.twig', [
            'model' => $model,
            'stamps' => $stamps,
            'perm' => $perm,
        ]);
    }
    /**
     * @Route("/admin/delete_model/{id}", name="delete_model", methods={"get"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function deleteModel($id) {
        $doctrine = $this->getDoctrine();
        $model = $doctrine->getRepository(Model::class)->findOneBy([
            'id' => $id
        ]);
        if($model) {
            $doctrine->getManager()->remove($model);
            $doctrine->getManager()->flush();
        }


        return $this->redirect('/admin/models');
    }

    /**
     * @Route("/admin/model/{id}", name="edit_save_model", methods={"post"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function editSaveModel($id, Request $request) {

        $doctrine = $this->getDoctrine();
        $model = $doctrine->getRepository(Model::class)->find($id);
        if(!$model) {
            $model = new Model();
            $model ->setName($request->get('model_name'))
                ->setWheel($request->get('wheel'))
            ->setStampId($request->get('stamp_id'));

            $doctrine->getManager()->persist($model);
            $doctrine->getManager()->flush();
        } else {
            $model ->setName($request->get('model_name'))
                ->setWheel($request->get('wheel'));
            $doctrine->getManager()->flush();
        }


        return $this->redirect('/admin/models');
    }



    /**
     * @Route("/admin/users", name="users_page")
     * @IsGranted("ROLE_ADMIN")
     */
    public function usersAction() {

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

//        dump($users);die;

        return $this->render('admin/users.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/admin/stamps", name="stamps_page")
     */
    public function stampsAction() {

        $stamps = $this->getDoctrine()->getRepository(Stamp::class)->findAll();

        return $this->render('admin/stamps.html.twig', [
            'stamps' => $stamps
        ]);
    }
    /**
     * @Route("/admin/stamp/{id}", name="edit_stamp", methods={"get"})
     * @IsGranted("ROLE_MANAGER")
     */
    public function editStamp($id) {

        $stamp = $this->getDoctrine()->getRepository(Stamp::class)->findOneBy([
            'id' => $id,
        ]);
        $perm = 1;
        if(!$stamp) {
            $stamp = new Stamp();
            $perm = 0;
        }

        return $this->render('admin/stamp_page.html.twig', [
            'stamp' => $stamp,
            'perm' => $perm,
        ]);
    }
    /**
     * @Route("/admin/delete_stamp/{id}", name="delete_stamp", methods={"get"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function deleteStamp($id) {
        $doctrine = $this->getDoctrine();
        $stamp = $doctrine->getRepository(Stamp::class)->findOneBy([
            'id' => $id
        ]);
        if($stamp) {
            $doctrine->getManager()->remove($stamp);
            $doctrine->getManager()->flush();
        }


        return $this->redirect('/admin/stamps');
    }

    /**
     * @Route("/admin/stamp/{id}", name="edit_save_stamp", methods={"post"})
     * @IsGranted("ROLE_ADMIN")
     */
    public function editSaveStamp($id, Request $request) {

        $doctrine = $this->getDoctrine();
        $stamp = $doctrine->getRepository(Stamp::class)->find($id);
        if(!$stamp) {
            $stamp = new Stamp();
            $stamp ->setName($request->get('stamp_name'));
            $doctrine->getManager()->persist($stamp);
            $doctrine->getManager()->flush();

        } else {
            $stamp ->setName($request->get('stamp_name'));
            $doctrine->getManager()->flush();
        }


        return $this->redirect('/admin/stamps');
    }

//    /**
//     * @Route("/admin", name="admin_page")
//     */
//    public function indexAction(): Response {
//        return $this->render('admin/index.html.twig', [
//
//        ]);
//    }


//    /**
//     * @Route("/admin/users", name="admin_users")
//     */
//    public function get_users(): Response
//    {
//
//        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
//
//
//        return $this->render('admin/users.html.twig', [
//            'users' => $users,
//        ]);
//    }
//
//    /**
//     * @Route("/admin/user/{user_id}", name="user_data_page")
//     */
//    public function edit_user($user_id): Response {
//
//        $user = $this->getDoctrine()->getRepository(User::class)->findBy([
//            'id' => $user_id,
//        ]);
//
//        return $this->render('admin/user_page.html.twig', [
//            'user' => $user[0],
//        ]);
//    }
//
//    /**
//     * @Route("/admin/models", name="admin_models")
//     */
//    public function get_models(Request $request): Response {
//
////        $searchfor = $request ->query->get('searchfor');
//
////        if ($searchfor) {
////            $models = $this->getDoctrine()->getRepository(Model::class)->findBy([
////                'model_name' => $searchfor,
////            ]);
////        } else {
////            $models = $this->getDoctrine()->getRepository(Model::class)->findAll();
////        }
//
//        $models = $this->getDoctrine()->getRepository(Model::class)->findAll();
//        return $this->render('admin/models.html.twig', [
//            'models' => $models,
////            'searchfor' => $searchfor
//        ]);
//    }
//
//    /**
//     * @Route("/admin/model/{$model_id}", name="edit_model")
//     */
//    public function edit_model($model_id): Response {
//        # select * From model where model_id = $id
//        $model = $this->getDoctrine()->getRepository(Model::class)->findOneBy([
//            'id' => $model_id,
//        ]);
//
//        dump($model[0]);
//        return $this->render('admin/edit_model.html.twig', [
//            'model' => $model[0],
//        ]);
//    }
//
//    /**
//     * @Route("/admin/stamps", name="admin_stamps")
//     */
//    public function get_stamps(): Response {
//
//        $stamps = $this->getDoctrine()->getRepository(Stamp::class)->findAll();
//
//        return $this->render('admin/stamps.html.twig', [
//            'stamps' => $stamps,
//        ]);
//    }
//
//    /**
//     * @Route("/admin/create", name="create_page")
//     */
//    public function createAction(Request $request): Response {
//
//        $stamps = $this->getDoctrine()->getRepository(Stamp::class)->findAll();
//        return $this ->render('admin/create_model.html.twig', [
//            'stamps' => $stamps
//        ]);
//    }
//
//    /**
//     * @Route("/admin/create/{$id}", methods="{"post"})
//     */
//    public function createModel(Request $request, ManagerRegistry $doctrine, $id): Response {
//
//        $model = $this->getDoctrine()->getRepository(Stamp::class)->find($id);
//        if(!$model) {
//            $entityManager = $doctrine->getManager();
//
//            $model = new Model();
//            $model->setName($request->get('name_model'))
//                ->setStampId($request->get('name_stamp'))
//                ->setWheel($request->get('wheel'));
//
//            $entityManager->persist($model);
//            $entityManager->flush();
//        }
//
//        $stamps = $this->getDoctrine()->getRepository(Stamp::class)->findAll();
//
//        return $this ->render('admin/create_model.html.twig', [
//            'stamps' => $stamps
//        ]);
//    }
}
