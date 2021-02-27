<?php


// include("connection.php");
include("simple_html_dom.php");


$link = 'https://www.amazon.com/Command-Picture-Decorate-Damage-Free-PH206-14NA/dp/B073XR4X72/ref=sr_1_1?dchild=1&qid=1614433453&s=arts-crafts-intl-ship&sr=1-1';
$page_content= file_get_contents($link);

// $h= file_get_html($page_content);


//  $ch = curl_init();
//                     curl_setopt($ch, CURLOPT_URL,"https://www.amazon.co.uk/All-new-Kindle-Paperwhite-waterproof-storage/dp/B07741S7Y8/ref=sr_1_3?_encoding=UTF8&c=ts&dchild=1&keywords=eBook+Readers+%26+Accessories&qid=1614426145&s=electronics&sr=1-3&ts_id=1345925031");
//                     curl_setopt($ch,CURLOPT_POST, false);
//                     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//                     // curl_setopt($ch, CURLOPT_ENCODING ,1);
//                     curl_setopt($ch, CURLOPT_HEADER, false);
//                     $output = curl_exec($ch);
//                     curl_close($ch);

                    $html= new simple_html_dom();
                    $html->load($page_content);

//==============================================================================================================

$product_name = $html->find('span[id=productTitle]', 0);
$product_name=trim($product_name->plaintext);
echo'<h1>'.$product_name.'</h1>';

echo'<br>';




$product_price= $html->find('span[id=priceblock_ourprice]', 0);
$product_price=trim($product_price->plaintext);
echo'<h1>'.$product_price.'</h1>';

echo'<br>';

$product_rating = $html->find('span[class=a-icon-alt]', 0);
$product_rating=trim($product_rating->plaintext);
echo'<h1>'.$product_rating.'</h1>';

echo'<br>';

$company = $html->find('a[id=bylineInfo]', 0);
$company=trim($company->plaintext);
echo'<h1>'.$company.'</h1>';

// echo'<br>';

// $capsity = $html->find('span[class=selection]', 0);
// $capsity=trim($capsity->plaintext);
// echo'<h1>'.$capsity.'</h1>';


echo'<br>';

$description= $html->find('div[id=feature-bullets]', 0);
$description=trim($description->plaintext);
echo'<h1>'.$description.'</h1>';

echo'<br>';

$status= $html->find('div[id=availability]', 0);
$status=trim($status->plaintext);
echo'<h1>'.$status.'</h1>';


echo'<br>';
$images_dom = $html->find('img[alt=Command Picture Hanging Strips Heavy Duty, Large, White, Holds 16 Lbs, 14-Pairs]', 0);
if($images_dom){
    $image1=trim($images_dom->src);
    echo $image1;
    }



// $= $html->find('div[id=]', 0);
// $status=trim($status->plaintext);
// echo'<h1>'.$status.'</h1>';








                // echo $html;
                // foreach($html->find('div[class=a-size-medium a-color-price priceBlockBuyingPriceString]') as $cat)
                // {
                  
                //     foreach ($cat->find('span[class=a-size-large product-title-word-break]') as $b) {
                //         $b=trim($b->plaintext);
                //         echo'<h1>'.$b.'</h1>';
                //     }
                    
                // }



                // $html = file_get_html($link);
                
                // if(preg_match('/<span class=\"a-size-medium a-color-price header-price\">(.*?)<\/span>/i',
                //     $page_content, $matches)) {
                
                //     $price = trim($matches[1]);
                //     echo $price;
                // } else {
                //     echo "Price not found.";
                //     $price = 0;


                
                // }
                    // echo $page_content;
                   
                    // echo iconv("UTF-8", "utf-8//IGNORE", utf8_encode($html));




?>