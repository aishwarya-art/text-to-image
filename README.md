# text-to-image

GD is an open-source code library that is required to create and manipulate images in PHP. It is used for creating PNG, JPEG, and GIF images. 

The GD library support should be enabled for working with image functions in PHP.

## Installing PHP GD in Windows

    To install the PHP GD follow the following steps:
    
  **Step 1: Install XAMPP in your windows system.**
    
  **Step 2: Verify if GD is already installed or not.** 
    
    *Open XAMPP and click on the start button in front of Apache and MySQL to start php server, and go to the admin.
    *A web page will open. Go to the ‘PHPInfo’ option on the top of the page.
    *A PHPInfo dashboard will open up. 
    *Scroll down the page and search for ‘gd’. If present, GD is already installed.
    *If ‘gd’ is not present on the phpinfo page, you can follow the next to install GD.

  **Step 3: Locate and open php.ini in your editor.**
  
  **Step 4: Find ;extension=gd.**
  
  **Step 5: Remove semicolon from ;extension=gd and save the file.**

  **Step 6: Go to php folder. It is usually present in C:\xampp.**

  **Step 7: Look for php_gd.dll in the ext folder.**

  **Step 8: Copy php_gd.dll and paste it into the following folder.**

    C:\Windows\System32
    
  **Step 9: Restart the XAMPP server.**
      Now use the phpinfo() method as mentioned in step 2 to check whether the GD library is installed in the PHP server. It will show information about the PHP’s       configuration.

  ## Output
  ![Text2Image](https://github.com/aishwarya-art/text-to-image/assets/113532088/5fe54479-2a41-4d66-9656-6655424f567d)


## Features
  Text can be converted to Image with adding colors font size etc.
  Image file can be downloaded too.

## Credits
Created By Aishwarya MS
