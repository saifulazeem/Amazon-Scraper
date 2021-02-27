<?php


// include("connection.php");
include("simple_html_dom.php");


$link = 'https://www.amazon.co.uk/beauty-cosmetics/b/?ie=UTF8&node=117332031&ref_=nav_cs_beauty_0739a1ed88864702a2320c9850a246c7';
$page_content= file_get_contents($link);

$html= new simple_html_dom();
$html->load($page_content);



// $cat_link=$product_cat->find('a[class=a-link-normal octopus-pc-category-card-v2-category-link]',0);




foreach($html->find('div[class=a-section octopus-pc-category-card-v2]') as $cat)
    {
        foreach($cat->find('ul') as $ul)
            {
                foreach($ul->find('li') as $li)
                    {
                        $cat_link=$li->find('a',0);
                        echo '<br>';
                        $cat_link=trim($cat_link->href);
                        $cat_link="https://www.amazon.co.uk".$cat_link;
                        // echo $cat_link=$cat_link->plaintext;
                        echo $cat_link;
                        echo '<br>';

                    }
            }
    }
    echo '<br>';echo '<br>';echo '<br>';

//===================================================================================================================


// foreach($html->find('div[class=s-main-slot s-result-list s-search-results sg-row]') as $cat_p)
//     {
//         foreach($cat_p->find('h2[class=a-size-mini a-spacing-none a-color-base s-line-clamp-4]') as $lii)
//         {
//             $p_link=$lii->find('a',2);
//             echo '<br>';
//             $p_link=trim($p_link->href);
//             echo $p_link;
//         }
      
//     }



// $product_name=trim($product_name->plaintext);
// echo'<h1>'.$product_name.'</h1>';

echo'<br>';




?>