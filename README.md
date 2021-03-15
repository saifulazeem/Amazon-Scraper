# Amazon-Scraper
I used php for scraping products from Amazon. If you want to execute the cose than follow the instruction properly. 
## Requirements
1) XAMP
2) MySQL DB
3) VScode or Sublime text (or any other IDE that u prefer)
4) Internet Connection
## Procedure

### Step 1
First Install all the requirments that mentioned above.

### Step 2

If you have installed Every thing Sucessfully than follow thses steps
  OPEN C DRVIE
  GO TO XAMP FOLDER AND OPEN IT
  OPEN htdocs Folder
  CREATE A NEW FOLDER WITH NAME SCRAPER
#### IF U HAVE GIT INSTEED IN YOUR PC THEN FOLLOW THIS OTHERWISE SKIP THIS
COPY This COMMAND below:
git clone https://github.com/saifulazeem/Amazon-Scraper.git

Now Open SCRAPER FOLDER That you Created then Open Command Prompt in the Scraper folder once cmd black screen windows  is opend paste the above command and Press ENTER

Now Close Black Window and Check Repo Will be Downloaded into you Scraper Folder.

#### IF U DONT HAVE GIT INSTALLED USE DOWNLOAD ZIP OPTION TO DOWNLOAD THE REPO 
ONCE ZIP FILE IS DOWNLOADED TO YOUR PC UN ZIP THE FILE AND COPY THE FOLDER AND PASTE IT INTO THE FOLDER NAME SCRAPER IN htdocs that you just created.

### STEP 3
if you are reached at this step then we are good to go.

Open Scraper.php file and on line 8 make changes
line 8 will be like this$link = 'https://www.amazon.com/Command-Picture-Decorate-Damage-Free-PH206-14NA/dp/B073XR4X72/ref=sr_1_1?dchild=1&qid=1614433453&s=arts-crafts-intl-ship&sr=1-1';
now u have to just paste your url in the '' cotes.
$link = 'paste your prduct url here....';

Save the File scraper.php

### Step 4
Now Open XAMP CONTROL PANEL
START APACHE
START MYSQL

### Step 5
GO to your Chrome Browser type the text below into your search bar

localhost/SCRAPER/Amazon-Scraper/Scraper.php

### YOU ARE DONE DETAILS OF PRODUCT WILL BE DISPLAYED IN OUTPUT 



