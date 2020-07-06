<?php


namespace App\Http\Controllers;


use App\Entities\Article;
use App\Entities\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        $articles = $this->getEntityManager()->getRepository(Article::class)->findAll();
        return view('index', array('articles'=>$articles));
    }

    public function signIn(Request $request) {
        if($request->method() === 'GET') {
            return view('sign-in');
        } else {
            $pseudo = $request->input('pseudo');
            $password = $request->input('password');
            $user = $this->getEntityManager()
                ->getRepository(User::class)
                ->findOneBy([
                    '_pseudo'=>$pseudo,
                    '_password'=>$password
                ]);

            $message = '';
            if($user != null) {
                $message = 'ok';
            } else {
                $message = 'pseudo ou mpd incorrect';
            }

            return $message;
        }

    }

    public function signUp(Request $request) {
        if($request->method() === 'GET') {
            return view('sign-up');
        } else {
            $pseudo = $request->input('pseudo');
            $password = $request->input('password');
            $user = new User($pseudo,$password);

            $message = '';

            /**
             * @todo Rediriger vers une vue adéquate
             */

            try {
                $this->getEntityManager()->persist($user);
                $this->getEntityManager()->flush();
                $message = 'OK';
            } catch (\Exception $e){
                $message = $e->getMessage();
            }

            return  $message;

        }

    }

}
