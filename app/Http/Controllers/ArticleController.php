<?php


namespace App\Http\Controllers;


use App\Entities\Article;
use App\Entities\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function addArticle(Request $request) {
        if($this->getSessionManager()->isLogin()) {
            $content = $request->input('content');
            $user = $this->getEntityManager()->getRepository(User::class)->find($_SESSION['id']);
            $article = new Article($content, $user);

            try{
                $this->getEntityManager()->persist($article);
                $this->getEntityManager()->flush();
                $message = '0';
            } catch(\Exception $e) {
                $message = '1';
                echo $e->getMessage();
            }
        } else {
            $message = '2';
        }

        return response()->json($message);
    }

}
