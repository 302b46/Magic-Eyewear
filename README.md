NOTES: 

-The .htaccess file in the App folder limits access of unauthorized users to critical files. (In this case, the App folder)



-The .htaccess file:
    1] !-f, if file already exists, access it
    2] !-d if directory already exists, access it
    3] ^(.*)$  -> Means get beginning, end, and everything in between

    4] It then sends it to the index page

    5] Get variable called url then put everything in it