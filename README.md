## SECURITY GUARDS MANAGEMENT SYSTEM

#### A SECURITY SYSTEM TO HELP IN MANAGING SECURITY GUARDS IN AN ORGANISATION

Users(admin, supervisor, guards) <br>

Roles <br>
#Admin <br>
-add new user <br>
-manage users <br>
-manage branches <br>
-manage announcements and help centres <br>
-view user(supervisors and guards) report <br>

#Supervisor <br>
-view assigned branch <br>
-manage guards in an assigned branch <br>
-view user(guards) report <br>
-view announcements and help centers <br>
-send email to users(guards) <br>

#Guard <br>
-view and edit user profile <br>
-view assigned branch and other guards in a branch <br>
-view announcements and help centers <br>
-report emergency(by sending email to admin) <br>

Tables <br>
#users table <br>
-user_id (auto) (255) <br>
-name (string) (255) <br>
-username (string) (255) <br>
-password (string) (min8) (encrypted) <br>
-level (string) (admin, supervisor, guard) <br>
-phone <br>
-image(file)(url, string) <br>
-branch_id(from branches table) <br>

#branches table <br>
-branch_id (auto) (255) <br>
-branch_name (string) <br>
-branch_location (string) <br>

#announcements table & helps table <br>
-announcement_id / help_id <br>
-title <br>
-description <br>
