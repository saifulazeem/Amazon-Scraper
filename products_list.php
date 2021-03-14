<?php


// include("connection.php");
include("simple_html_dom.php");


$link = 'https://www.amazon.co.uk/s?k=Computers%2C+Components+%26+Accessories&i=electronics&rh=n%3A949408031&page=2&_encoding=UTF8&c=ts&qid=1615732901&ts_id=949408031&ref=sr_pg_2';
$page_content= file_get_contents($link);

$html= new simple_html_dom();
$html->load($page_content);

// echo $html;

// $cat_link=$html->find('h2[class=a-size-mini a-spacing-none a-color-base s-line-clamp-4]',0);


// $cat_link=$product_cat->find('a[class=a-link-normal octopus-pc-category-card-v2-category-link]',0);




foreach($html->find('h2[class=a-size-mini a-spacing-none a-color-base s-line-clamp-4]') as $cat)
    {
//         foreach($cat->find('ul') as $ul)
//             {
//                 foreach($ul->find('li') as $li)
//                     {
                        $cat=$cat->find('a',0);
//                         echo '<br>';
//                         $cat_link=trim($cat_link->href);

// //                         // echo $cat_link=$cat_link->plaintext;
                        // echo $cat;
                        $cat=trim($cat->href);
                        $cat="https://www.amazon.co.uk".$cat;
                        echo $cat;
                        echo '<br>';

//                     }
//             }
    }
    echo '<br>';echo '<br>';echo '<br>';


    ?>