<?php


$genre = "映画";
$title = "時をかける少女";
$review = "人生の最高傑作アニメ。\n\n青春厨としてはたまらない甘酸っぱい青春ストーリー。\n\nちあきのイケメンさは言うまでもない。\n\n人にお金を払ってでもみて欲しい作品。\n\n早く見たほうがいいよ。\nTime waits for no one.";
$line = "---------------------------";


function post00_review(){
      $post00 = array();
      $post00 ['genre_user'] = "映画";
      $post00 ['title_user'] = "時をかける少女";
      $post00 ['review_user'] = "人生の最高傑作アニメ。\n\n青春厨としてはたまらない甘酸っぱい青春ストーリー。\n\nちあきのイケメンさは言うまでもない。\n\n人にお金を払ってでもみて欲しい作品。\n\n早く見たほうがいいよ。\nTime waits for no one.";
}

function post_review($a_posts) {
      echo "\n";
      $post = array();
      echo "ジャンルを入力してください：\n";
      //$genre_user = trim(fgets(STDIN));
      $post['genre_user'] = trim(fgets(STDIN));
      echo "タイトルを入力してください：\n";
      //$title_user = trim(fgets(STDIN));
      $post['title_user'] = trim(fgets(STDIN));
      echo "感想を入力してください：\n";
      //$review_user = trim(fgets(STDIN));
      $post['review_user'] = trim(fgets(STDIN));

      echo "\n";
      echo "ジャンル:{$post['genre_user']}\n{$line}\n";
      echo "タイトル:{$post['title_user']}\n{$line}\n";
      echo "レビュー:{$post['review_user']}\n{$line}\n";
      //$GLOBALS['posts[]'] = $post;
      $a_posts[] =  $post;
      return $a_posts;
}

function read_reviews($a_posts) {
      $number = 1;
      foreach ($a_posts as $post){
            echo "["."{$number}"."]：{$post['title_user']}のレビュー\n";
            $number += 1;
      }

      echo "\n見たいレビューの番号を入力してください：\n";
      $input = intval(trim(fgets(STDIN)))-1;
      $post = $a_posts[$input];

      $line = "---------------------------";
      echo "ジャンル:{$post['genre_user']}\n{$line}\n";
      echo "タイトル:{$post['title_user']}\n{$line}\n";
      echo "感想:{$post['review_user']}\n{$line}\n";
      // post00_review();
      // echo "ジャンル:{$post00['genre_user']}\n{$line}\n";
      // echo "タイトル:{$post00['title_user']}\n{$line}\n";
      // echo "レビュー:{$post00['review_user']}\n{$line}\n";
      // echo "\n";
      // echo "ジャンル : {$GLOBALS['genre']}\n{$GLOBALS['line']}\n";
      // echo "タイトル : {$GLOBALS['title']}\n{$GLOBALS['line']}\n";
      // echo "感想 :\n{$GLOBALS['review']}\n{$GLOBALS['line']}\n";
}

function end_program() {
      echo "\n";
      echo "プログラムを終了します\n";
      exit;
}

function exception(){
      echo "\n";
      echo "入力された値は無効な値です";
}

$posts = array();

while(true){

      // メニューの表示
      echo "レビュー数：".count($posts),PHP_EOL;
      echo "[1]レビューを書く\n";
      echo "[2]レビューを読む\n";
      echo "[0]アプリを終了する\n";
      $input = intval(trim(fgets(STDIN)));

      if ($input === 1) {
            // 変数の定義
            $posts = post_review($posts);

      } elseif ($input === 2) {
            read_reviews($posts);

      } elseif ($input === 0) {
            end_program();

      } else {
            exception();
      }
}

// echo "ジャンル:$genre_user\n{$line}\n";
// echo "タイトル:$title_user\n{$line}\n";
// echo "レビュー:$review_user\n{$line}\n";

//var_dump($post)

// $abc = "{$post}";
// echo "abc";

?>