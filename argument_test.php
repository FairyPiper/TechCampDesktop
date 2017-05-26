<?php
    function puts_something($something)// 引数を受け取る処理を書きます)
    {
        // ここに処理を書きます
        echo "$something"."!\n";
    }

    function test($hoge,$fuga){
        $total = $hoge*$fuga;
        echo $hoge."と".$fuga."をかけた答えは".$total."です！\n";
    }

    function box($number_box){
        $fruits_box = array("apple", "orange", "cherry");
        if ((intval($number_box)) >= 1 and (intval($number_box)) <=3){
          echo "{$number_box}番目の要素は".$fruits_box[$number_box]."です！\n";
        }
        else{
          echo "{$number_box}番目の要素はありません！\n";
        }
    }

    function movie($index){
        $movie_list = array("title" => "ハリーポッター", "genre" => "ファンタジー", "year" => "2001年");
        //$movie_call = $movie_list["$index"]
        //$index_return = $movie[$index]
        echo "{$index}は：{$movie_list[$index]}";
    }

    // echo "何か値を入力してください・・・\n";
    // trim(fgets(STDIN))を利用した変数の定義をした後、関数を呼び出してください

    echo "何か値を入力してください・・・\n";

    //$string = intval(trim(fgets(STDIN)));
    // var_dump ($string);
    //puts_something("{$string}");

    // echo "最初の数字を入力してください\n";
    // $num1 = intval(trim(fgets(STDIN)));
    // echo "2番目の数字を入力してください\n";
    // $num2 = intval(trim(fgets(STDIN)));
    // test($num1, $num2);

    // echo "何が出るかな？取り出したい要素の順番を入力してください\n";
    // $num_box = trim(fgets(STDIN));
    // box($num_box);

    echo "以下から１つを選んで入力してください。\n[1]title\n[2]genre\n[3]year\n";
    $movie_input = trim(fgets(STDIN));
    movie($movie_input);

?>