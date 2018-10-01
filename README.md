# tgui_passwd_reset
Easy way to reset tacacsgui password

## Instruction
1. Copy/Paste the file **tgui_passwd_reset.php** inside of dir */opt/tacacsgui/web/api/*
2. Run the code **php /opt/tacacsgui/web/api/tgui_passwd_reset.php**
3. Enter the username. If you will see **Done!**, the password was reset to *tacgui* for that user. If you see **Username Not Found! Good bye!**, user not found or password already reset.

### Output example
> ###################################
>
> Wellcome to password restoring tool!
>
> ###################################
> 
> Enter Username: user_test
> 
> Done!

P.S.: don't forget to delete that file after password reset *rm /opt/tacacsgui/web/api/tgui_passwd_reset.php*
