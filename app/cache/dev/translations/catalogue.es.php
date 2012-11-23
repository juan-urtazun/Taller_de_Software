<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false' => 'Este valor debería ser falso',
    'This value should be true' => 'Este valor debería ser verdadero',
    'This value should be of type {{ type }}' => 'Este valor debería ser de tipo {{ type }}',
    'This value should be blank' => 'Este valor debería estar vacío',
    'The value you selected is not a valid choice' => 'El valor seleccionado no es una opción válida',
    'You must select at least {{ limit }} choices' => 'Debe seleccionar al menos {{ limit }} opciones',
    'You must select at most {{ limit }} choices' => 'Debe seleccionar como máximo {{ limit }} opciones',
    'One or more of the given values is invalid' => 'Uno o más de los valores indicados no son válidos',
    'The fields {{ fields }} were not expected' => 'No se esperaban los campos {{ fields }}',
    'The fields {{ fields }} are missing' => 'Faltan los campos {{ fields }}',
    'This value is not a valid date' => 'Este valor no es una fecha válida',
    'This value is not a valid datetime' => 'Este valor no es una fecha y hora válidas',
    'This value is not a valid email address' => 'Este valor no es una dirección de email válida',
    'The file could not be found' => 'No se pudo encontrar el archivo',
    'The file is not readable' => 'No se puede leer el archivo',
    'The file is too large ({{ size }}). Allowed maximum size is {{ limit }}' => 'El archivo es demasiado grande ({{ size }}). El tamaño máximo permitido es {{ limit }}',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}',
    'This value should be {{ limit }} or less' => 'Este valor debería ser {{ limit }} o menos',
    'This value is too long. It should have {{ limit }} characters or less' => 'Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos',
    'This value should be {{ limit }} or more' => 'Este valor debería ser {{ limit }} o más',
    'This value is too short. It should have {{ limit }} characters or more' => 'Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más',
    'This value should not be blank' => 'Este valor no debería estar vacío',
    'This value should not be null' => 'Este valor no debería ser null',
    'This value should be null' => 'Este valor debería ser null',
    'This value is not valid' => 'Este valor no es válido',
    'This value is not a valid time' => 'Este valor no es una hora válida',
    'This value is not a valid URL' => 'Este valor no es una URL válida',
    'This form should not contain extra fields' => 'Este formulario no debería contener campos adicionales',
    'The uploaded file was too large. Please try to upload a smaller file' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño',
    'The CSRF token is invalid' => 'El token CSRF no es válido',
    'The two values should be equal' => 'Los dos valores deberían ser iguales',
    'The file is too large. Allowed maximum size is {{ limit }}' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }}',
    'The file is too large' => 'El archivo es demasiado grande',
    'The file could not be uploaded' => 'No se pudo subir el archivo',
    'This value should be a valid number' => 'Este valor debería ser un número válido',
    'This file is not a valid image' => 'El archivo no es una imagen válida',
    'This is not a valid IP address' => 'Esto no es una dirección IP válida',
    'This value is not a valid language' => 'Este valor no es un idioma válido',
    'This value is not a valid locale' => 'Este valor no es una localización válida',
    'This value is not a valid country' => 'Este valor no es un país válido',
    'This value is already used' => 'Este valor ya se ha utilizado',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario',
    'fos_user.username.short' => 'El nombre de usuario es demasiado corto',
    'fos_user.username.long' => 'El nombre de usuario es demasiado largo',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo',
    'fos_user.email.short' => 'La dirección de correo es demasiado corta',
    'fos_user.email.long' => 'La dirección de correo es demasiado larga',
    'fos_user.email.invalid' => 'La dirección de correo no es válida',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña',
    'fos_user.password.short' => 'La contraseña es demasiado corta',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña',
    'fos_user.new_password.short' => 'La nueva contraseña es demasiado corta',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre',
    'fos_user.group.short' => 'El nombre es demasiado corto',
    'fos_user.group.long' => 'El nombre es demasiado largo',
  ),
  'FOSUserBundle' => 
  array (
    'fos_user_group_form_name' => 'Nombre de grupo:',
    'fos_user_profile_form_user_username' => 'Nombre de usuario:',
    'fos_user_profile_form_user_email' => 'Email:',
    'fos_user_profile_form_current' => 'Contraseña actual:',
    'fos_user_registration_form_username' => 'Nombre de usuario:',
    'fos_user_registration_form_email' => 'Email:',
    'fos_user_registration_form_plainPassword_first' => 'Contraseña:',
    'fos_user_registration_form_plainPassword_second' => 'Verificación:',
    'fos_user_resetting_form_new_first' => 'Nueva contraseña:',
    'fos_user_resetting_form_new_second' => 'Verificación:',
    'fos_user_change_password_form_new_first' => 'Nueva contraseña:',
    'fos_user_change_password_form_new_second' => 'Verificación:',
    'fos_user_change_password_form_current' => 'Contraseña actual:',
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado',
    'group.flash.created' => 'El grupo ha sido creado',
    'group.flash.deleted' => 'El grupo ha sido borrado',
    'security.login.username' => 'Nombre de usuario:',
    'security.login.password' => 'Contraseña:',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito',
    'registration.check_email' => 'Un email ha sido enviado a %email%. Contiene un enlace de activación que debes presionar para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente',
    'registration.email.subject' => 'Bienvenido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completar la validación de tu cuenta - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'resetting.password_already_requested' => 'La contraseña para este usuario ya ha sido solicitada dentro de las 24 horas.',
    'resetting.check_email' => 'Un email ha sido enviado a %email%. Contiene un enlace de activación que debes presionar para restablecer tu contraseña.',
    'resetting.request.invalid_username' => 'El usuario o dirección de correo "%username%" no existe.',
    'resetting.request.username' => 'Nombre de usuario:',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito',
    'resetting.email.subject' => 'Bienvenido %username%!',
    'resetting.email.message' => 'Hola %username%!

Para restablecer tu contraseña - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Entrado como %username%',
  ),
  'SonataAdminBundle' => 
  array (
    'action_delete' => 'Borrar',
    'btn_batch' => 'Ok',
    'btn_create' => 'Crear',
    'btn_create_and_edit_again' => 'Crear y editar',
    'btn_create_and_create_a_new_one' => 'Crear y agregar otro',
    'btn_filter' => 'Filtrar',
    'btn_update_and_edit_again' => 'Actualizar',
    'btn_update_and_return_to_list' => 'Actualizar y cerrar',
    'link_delete' => 'Borrar',
    'link_action_create' => 'Agregar nuevo',
    'link_action_list' => 'Volver a la lista',
    'link_action_show' => 'Mostrar',
    'link_action_edit' => 'Editar',
    'link_add' => 'Agregar nuevo',
    'link_list' => 'Listar',
    'link_reset_filter' => 'Resetear',
    'title_create' => 'Crear',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Editar "%name%"',
    'title_list' => 'Listar',
    'link_next_pager' => 'Siguiente',
    'link_previous_pager' => 'Anterior',
    'link_first_pager' => 'Primero',
    'link_last_pager' => 'Último',
    'Admin' => 'Admin',
    'link_expand' => 'expandir/ocultar',
    'no_result' => 'No hay resultados',
    'confirm_msg' => '¿Estás seguro?',
    'action_edit' => 'Editar',
    'action_show' => 'Mostrar',
    'all_elements' => 'Todos los elementos',
    'flash_batch_empty' => 'Acción cancelada. Ningún item seleccionado.',
    'flash_create_success' => 'Elemento creado satisfactoriamente.',
    'flash_create_error' => 'Se ha producido un error durante la creación del elemento.',
    'flash_edit_success' => 'Elemento actualizado satisfactoriamente.',
    'flash_edit_error' => 'Se ha producido un error durante la actualización del elemento.',
    'flash_batch_delete_success' => 'Los elementos seleccionados fueron eliminados satisfactoriamente.',
    'flash_batch_delete_error' => 'Se ha producido un error durante la eliminación de los elementos selecciondaos.',
    'flash_delete_error' => 'Se ha producido un error durante la eliminación del elemento.',
    'flash_delete_success' => 'Elemento eliminado satisfactoriamente.',
    'breadcrumb.link_dashboard' => '⌂',
    'title_delete' => 'Confirmar borrado',
    'message_delete_confirmation' => '¿Está seguro que quiere borrar el elemento seleccionado?',
    'btn_delete' => 'Sí, borrar',
    'title_batch_confirmation' => 'Confirme la operación',
    'message_batch_confirmation' => '{0}¿Está seguro que quiere confirmar y ejecutar esta acción para todos los elementos seleccionados?|[1,+Inf[¿Está seguro que quiere confirmar y ejecutar esta acción para todos los %count% elementos seleccionados?',
    'message_batch_all_confirmation' => '¿Está seguro que quiere confirmar y ejecutar esta acción para todos los elementos?',
    'btn_execute_batch_action' => 'Sí, ejecutar',
    'label_type_yes' => 'sí',
    'label_type_no' => 'no',
    'label_type_contains' => 'contiene',
    'label_type_not_contains' => 'no contiene',
    'label_type_equals' => 'es igual a',
    'label_type_not_equals' => 'no es igual a',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'está vacío',
    'label_date_type_not_null' => 'no está vacío',
    'label_date_type_between' => 'entre',
    'label_date_type_not_between' => 'no entre',
    'label_filters' => 'Filtros',
    'delete_or' => 'o',
    'link_action_history' => 'Revisiones',
    'td_action' => 'Acción',
    'td_revision' => 'Revisiones',
    'td_timestamp' => 'Fecha',
    'td_username' => 'Autor',
    'label_view_revision' => 'Ver Revisión',
    'list_results_count' => '1 resultado|%count% resultados',
    'label_export_download' => 'Exportar: ',
    'loading_information' => 'Cargando información...',
    'btn_preview' => 'Vista preliminar',
    'btn_preview_approve' => 'Aprobar',
    'btn_preview_decline' => 'Cancelar',
  ),
  'SonataUserBundle' => 
  array (
    'breadcrumb.link_user_list' => 'Usuarios',
    'breadcrumb.link_user_create' => 'Crear',
    'breadcrumb.link_user_edit' => 'Editar',
    'breadcrumb.link_user_delete' => 'Borrar',
    'breadcrumb.link_group_list' => 'Grupos',
    'breadcrumb.link_group_create' => 'Crear',
    'breadcrumb.link_group_edit' => 'Editar',
    'users' => 'Usuarios',
    'groups' => 'Grupos',
    'switch_user_exit' => 'Terminar modo de suplantación de usuarios',
    'switch_user' => 'Suplantar usuario',
    'user_block_logout' => 'Cerrar sesión',
    'form.label_username' => 'Nombre de usuario',
    'form.label_email' => 'Dirección de correo electrónico',
    'form.label_plain_password' => 'Contraseña',
    'form.label_groups' => 'Grupos',
    'form.label_roles' => 'Perfiles',
    'form.label_locked' => 'Bloqueado',
    'form.label_expired' => 'Expirado',
    'form.label_enabled' => 'Habilitado',
    'form.label_credentials_expired' => 'Credenciales caducadas',
    'form.label_name' => 'Nombre',
    'filter.label_username' => 'Nombre de usuario',
    'filter.label_name' => 'Nombre',
    'filter.label_email' => 'Dirección de correo electrónico',
    'filter.label_locked' => 'Bloqueado',
    'filter.label_id' => 'ID',
    'filter.label_groups' => 'Grupos',
    'list.label_username' => 'Nombre de usuario',
    'list.label_name' => 'Nombre',
    'list.label_email' => 'Dirección de correo electrónico',
    'list.label_groups' => 'Grupos',
    'list.label_locked' => 'Bloqueado',
    'list.label_enabled' => 'Habilitado',
    'list.label_created_at' => 'Creado en',
    'list.label_impersonating' => 'Suplantar usuario',
    'list.label_roles' => 'Perfiles',
    'label_two_step_code' => 'Verificación de dos pasos',
    'message_two_step_code_help' => 'Ingrese el código de verificación generado por la aplicación de su móvil.',
    'label_two_step_code_error' => 'El código de verificación no es válido.',
    'sonata_user' => 'Usuario',
    'General' => 'General',
    'Groups' => 'Grupos',
    'Management' => 'Administración',
    'field.label_roles_editable' => 'Roles',
    'form.label_date_of_birth' => 'Fecha de nacimiento',
    'form.label_firstname' => 'Nombre',
    'form.label_lastname' => 'Apellido',
    'form.label_website' => 'Sitio web',
    'form.label_biography' => 'Biografía',
    'form.label_gender' => 'Sexo',
    'form.label_locale' => 'Localización',
    'form.label_timezone' => 'Zona horaria',
    'form.label_phone' => 'Teléfono',
    'form.label_facebook_uid' => 'UID de Facebook',
    'form.label_facebook_name' => 'Nombre en Facebook',
    'form.label_twitter_uid' => 'UID de Twitter',
    'form.label_twitter_name' => 'Nombre en Twitter',
    'form.label_gplus_uid' => 'UID de Google+',
    'form.label_gplus_name' => 'Nombre en Google+',
    'form.label_token' => 'Token',
    'form.label_two_step_verification_code' => 'Código de verificación de dos pasos',
    'show.label_username' => 'Nombre de usuario',
    'show.label_email' => 'Correo electrónico',
    'show.label_groups' => 'Grupos',
    'show.label_date_of_birth' => 'Fecha de nacimiento',
    'show.label_firstname' => 'Nombre',
    'show.label_lastname' => 'Apellido',
    'show.label_website' => 'Sitio web',
    'show.label_biography' => 'Biografía',
    'show.label_gender' => 'Sexo',
    'show.label_locale' => 'Localización',
    'show.label_timezone' => 'Zona horaria',
    'show.label_phone' => 'Teléfono',
    'show.label_facebook_uid' => 'UID de Facebook',
    'show.label_facebook_name' => 'Nombre en Facebook',
    'show.label_twitter_uid' => 'UID de Twitter',
    'show.label_twitter_name' => 'Nombre en Twitter',
    'show.label_gplus_uid' => 'UID de Google+',
    'show.label_gplus_name' => 'Nombre en Google+',
    'show.label_token' => 'Token',
    'show.label_two_step_verification_code' => 'Código de verificación de dos pasos',
    'breadcrumb.link_user_show' => 'Mostrar',
  ),
  'pagerfanta' => 
  array (
    'previous' => 'Anterior',
    'next' => 'Siguiente',
  ),
));

$catalogue->addFallbackCatalogue(new MessageCatalogue('en', array (
  'FOSUserBundle' => 
  array (
    'Bad credentials' => 'Invalid username or password',
    'fos_user_group_form_name' => 'Group name:',
    'fos_user_profile_form_user_username' => 'Username:',
    'fos_user_profile_form_user_email' => 'Email:',
    'fos_user_profile_form_current' => 'Current Password:',
    'fos_user_registration_form_username' => 'Username:',
    'fos_user_registration_form_email' => 'Email:',
    'fos_user_registration_form_plainPassword_first' => 'Password:',
    'fos_user_registration_form_plainPassword_second' => 'Verification:',
    'fos_user_resetting_form_new_first' => 'New password:',
    'fos_user_resetting_form_new_second' => 'Verification:',
    'fos_user_change_password_form_new_first' => 'New password:',
    'fos_user_change_password_form_new_second' => 'Verification:',
    'fos_user_change_password_form_current' => 'Current password:',
    'group.edit.submit' => 'Update group',
    'group.show.name' => 'Group name',
    'group.new.submit' => 'Create group',
    'group.flash.updated' => 'The group has been updated',
    'group.flash.created' => 'The group has been created',
    'group.flash.deleted' => 'The group has been deleted',
    'security.login.username' => 'Username:',
    'security.login.password' => 'Password:',
    'security.login.remember_me' => 'Remember me',
    'security.login.submit' => 'Login',
    'profile.show.username' => 'Username',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Update',
    'profile.flash.updated' => 'The profile has been updated',
    'change_password.submit' => 'Change password',
    'change_password.flash.success' => 'The password has been changed',
    'registration.check_email' => 'An email has been sent to %email%. It contains an activation link you must click to activate your account.',
    'registration.confirmed' => 'Congrats %username%, your account is now activated.',
    'registration.back' => 'Back to the originating page.',
    'registration.submit' => 'Register',
    'registration.flash.user_created' => 'The user has been created successfully',
    'registration.email.subject' => 'Welcome %username%!',
    'registration.email.message' => 'Hello %username%!

To finish activating your account - please visit %confirmationUrl%

Regards,
the Team.
',
    'resetting.password_already_requested' => 'The password for this user has already been requested within the last 24 hours.',
    'resetting.check_email' => 'An email has been sent to %email%. It contains a link you must click to reset your password.',
    'resetting.request.invalid_username' => 'The username or email address "%username%" does not exist.',
    'resetting.request.username' => 'Username or email address:',
    'resetting.request.submit' => 'Reset password',
    'resetting.reset.submit' => 'Change password',
    'resetting.flash.success' => 'The password has been reset successfully',
    'resetting.email.subject' => 'Reset Password',
    'resetting.email.message' => 'Hello %username%!

To reset your password - please visit %confirmationUrl%

Regards,
the Team.
',
    'layout.logout' => 'Logout',
    'layout.login' => 'Login',
    'layout.register' => 'Register',
    'layout.logged_in_as' => 'Logged in as %username%',
  ),
  'validators' => 
  array (
    'fos_user.username.already_used' => 'The username is already used',
    'fos_user.username.blank' => 'Please enter a username',
    'fos_user.username.short' => 'The username is too short',
    'fos_user.username.long' => 'The username is too long',
    'fos_user.email.already_used' => 'The email is already used',
    'fos_user.email.blank' => 'Please enter an email',
    'fos_user.email.short' => 'The email is too short',
    'fos_user.email.long' => 'The email is too long',
    'fos_user.email.invalid' => 'The email is not valid',
    'fos_user.password.blank' => 'Please enter a password',
    'fos_user.password.short' => 'The password is too short',
    'fos_user.new_password.blank' => 'Please enter a new password',
    'fos_user.new_password.short' => 'The new password is too short',
    'fos_user.current_password.invalid' => 'The entered password is invalid',
    'fos_user.group.blank' => 'Please enter a name',
    'fos_user.group.short' => 'The name is too short',
    'fos_user.group.long' => 'The name is too long',
  ),
  'SonataAdminBundle' => 
  array (
    'action_delete' => 'Delete',
    'btn_batch' => 'Ok',
    'btn_create' => 'Create',
    'btn_create_and_edit_again' => 'Create',
    'btn_create_and_create_a_new_one' => 'Create and add another',
    'btn_filter' => 'Filter',
    'btn_update_and_edit_again' => 'Update',
    'btn_update_and_return_to_list' => 'Update and close',
    'link_delete' => 'Delete',
    'link_action_create' => 'Add new',
    'link_action_list' => 'Return to list',
    'link_action_show' => 'Show',
    'link_action_edit' => 'Edit',
    'link_add' => 'Add new',
    'link_list' => 'List',
    'link_reset_filter' => 'Reset',
    'title_create' => 'Create',
    'title_dashboard' => 'Dashboard',
    'title_edit' => 'Edit "%name%"',
    'title_list' => 'List',
    'link_next_pager' => 'Next',
    'link_previous_pager' => 'Previous',
    'link_first_pager' => 'First',
    'link_last_pager' => 'Last',
    'Admin' => 'Admin',
    'link_expand' => 'expand/collapse',
    'no_result' => 'No result',
    'confirm_msg' => 'Are you sure ?',
    'action_edit' => 'Edit',
    'action_show' => 'Show',
    'all_elements' => 'All elements',
    'flash_batch_empty' => 'Action aborted. No items where selected.',
    'flash_create_success' => 'Item has been successfully created.',
    'flash_create_error' => 'An error has occurred during item creation.',
    'flash_edit_success' => 'Item has been successfully updated.',
    'flash_edit_error' => 'An error has occurred during item update.',
    'flash_batch_delete_success' => 'Selected items have been successfully deleted.',
    'flash_batch_delete_error' => 'An Error has occurred during selected items deletion.',
    'flash_delete_error' => 'An Error has occurred during item deletion.',
    'flash_delete_success' => 'Item has been deleted successfully.',
    'breadcrumb.link_dashboard' => '⌂',
    'title_delete' => 'Confirm deletion',
    'message_delete_confirmation' => 'Are you sure you want to delete the selected element?',
    'btn_delete' => 'Yes, delete',
    'title_batch_confirmation' => 'Confirm batch action',
    'message_batch_confirmation' => 'Are you sure you want to confirm this action and execute it for the selected element?|Are you sure you want to confirm this action and execute it for the %count% selected elements?',
    'message_batch_all_confirmation' => 'Are you sure you want to confirm this action and execute it for all the elements?',
    'btn_execute_batch_action' => 'Yes, execute',
    'label_type_yes' => 'yes',
    'label_type_no' => 'no',
    'label_type_contains' => 'contains',
    'label_type_not_contains' => 'does not contain',
    'label_type_equals' => 'is equal to',
    'label_type_not_equals' => 'is not equal to',
    'label_type_equal' => '=',
    'label_type_greater_equal' => '>=',
    'label_type_greater_than' => '>',
    'label_type_less_equal' => '<=',
    'label_type_less_than' => '<',
    'label_date_type_equal' => '=',
    'label_date_type_greater_equal' => '>=',
    'label_date_type_greater_than' => '>',
    'label_date_type_less_equal' => '<=',
    'label_date_type_less_than' => '<',
    'label_date_type_null' => 'is empty',
    'label_date_type_not_null' => 'is not empty',
    'label_date_type_between' => 'between',
    'label_date_type_not_between' => 'not between',
    'label_filters' => 'Filters',
    'delete_or' => 'or',
    'link_action_history' => 'Revisions',
    'td_action' => 'Action',
    'td_revision' => 'Revisions',
    'td_timestamp' => 'Date',
    'td_username' => 'Author',
    'label_view_revision' => 'View Revision',
    'list_results_count' => '1 result|%count% results',
    'label_export_download' => 'Download : ',
    'loading_information' => 'Loading information…',
    'btn_preview' => 'Preview',
    'btn_preview_approve' => 'Approve',
    'btn_preview_decline' => 'Decline',
  ),
  'SonataUserBundle' => 
  array (
    'breadcrumb.link_user_list' => 'Users',
    'breadcrumb.link_user_create' => 'Create',
    'breadcrumb.link_user_edit' => 'Edit',
    'breadcrumb.link_user_delete' => 'Delete',
    'breadcrumb.link_user_history' => 'History',
    'breadcrumb.link_group_list' => 'Groups',
    'breadcrumb.link_group_create' => 'Create',
    'breadcrumb.link_group_edit' => 'Edit',
    'breadcrumb.link_group_delete' => 'Delete',
    'breadcrumb.link_group_history' => 'History',
    'users' => 'Users',
    'groups' => 'Groups',
    'switch_user_exit' => 'Exit impersonating mode',
    'switch_user' => 'Impersonate User',
    'user_block_logout' => 'Logout',
    'form.label_username' => 'Username',
    'form.label_email' => 'E-Mail-Address',
    'form.label_plain_password' => 'Plain password',
    'form.label_groups' => 'Groups',
    'form.label_roles' => 'Roles',
    'form.label_locked' => 'Locked',
    'form.label_expired' => 'Expired',
    'form.label_enabled' => 'Enabled',
    'form.label_credentials_expired' => 'Credentials expired',
    'form.label_name' => 'Name',
    'filter.label_username' => 'Username',
    'filter.label_name' => 'Name',
    'filter.label_email' => 'E-Mail-Address',
    'filter.label_locked' => 'Locked',
    'filter.label_id' => 'ID',
    'filter.label_groups' => 'Groups',
    'list.label_username' => 'Username',
    'list.label_name' => 'Name',
    'list.label_email' => 'E-Mail-Address',
    'list.label_groups' => 'Groups',
    'list.label_locked' => 'Locked',
    'list.label_enabled' => 'Enabled',
    'list.label_created_at' => 'Created at',
    'list.label_impersonating' => 'Impersonate User',
    'list.label_roles' => 'Roles',
    'label_two_step_code' => 'Two-step verification',
    'message_two_step_code_help' => 'Enter the verification code generated by your mobile application.',
    'label_two_step_code_error' => 'The verification code is not valid',
    'sonata_user' => 'Users',
    'General' => 'General',
    'Groups' => 'Groups',
    'Management' => 'Management',
    'field.label_roles_editable' => 'Roles',
    'form.label_date_of_birth' => 'Date of birth',
    'form.label_firstname' => 'Firstname',
    'form.label_lastname' => 'Lastname',
    'form.label_website' => 'Website',
    'form.label_biography' => 'Biography',
    'form.label_gender' => 'Gender',
    'form.label_locale' => 'Locale',
    'form.label_timezone' => 'Timezone',
    'form.label_phone' => 'Phone',
    'form.label_facebook_uid' => 'Facebook Uid',
    'form.label_facebook_name' => 'Facebook Name',
    'form.label_twitter_uid' => 'Twitter Uid',
    'form.label_twitter_name' => 'Twitter Name',
    'form.label_gplus_uid' => 'Google+ Uid',
    'form.label_gplus_name' => 'Google+ Name',
    'form.label_token' => 'Token',
    'form.label_two_step_verification_code' => 'Two Step Verification Code',
    'show.label_username' => 'Username',
    'show.label_email' => 'Email',
    'show.label_groups' => 'Groups',
    'show.label_date_of_birth' => 'Date of birth',
    'show.label_firstname' => 'Firstname',
    'show.label_lastname' => 'Lastname',
    'show.label_website' => 'Website',
    'show.label_biography' => 'Biography',
    'show.label_gender' => 'Gender',
    'show.label_locale' => 'Locale',
    'show.label_timezone' => 'Timezone',
    'show.label_phone' => 'Phone',
    'show.label_facebook_uid' => 'Facebook Uid',
    'show.label_facebook_name' => 'Facebook Name',
    'show.label_twitter_uid' => 'Twitter Uid',
    'show.label_twitter_name' => 'Twitter Name',
    'show.label_gplus_uid' => 'Google+ Uid',
    'show.label_gplus_name' => 'Google+ Name',
    'show.label_token' => 'Token',
    'show.label_two_step_verification_code' => 'Two Step Verification Code',
    'breadcrumb.link_user_show' => 'Show',
  ),
  'pagerfanta' => 
  array (
    'previous' => 'Previous',
    'next' => 'Next',
  ),
)));

return $catalogue;
