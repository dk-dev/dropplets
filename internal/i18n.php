<?php

$language = [
    "en_US" => [
        "locale" => "us_EN",
        "dateformat" => "%B %d, %Y",
        "settings_i18n" => "Internationalization:",
        "settings_blog_creation" => "Let's create your blog",
        "settings_blog_edition" => "Edit your blog's settings",
        "settings_legend" => "First, some details:",
        "settings_blog_name" => "Blog Name:",
        "settings_blog_name_placeholder" => "Enter your blog's name",
        "settings_blog_info" => "Blog Info:",
        "settings_blog_info_placeholder" => "Enter an optional info message",
        "settings_footer_message" => "Footer Message:",
        "settings_footer_message_placeholder" => "Enter an optional footer message",
        "settings_header_inject" => "Header Injection Code:",
        "settings_header_inject_placeholder" => "Enter an optional header injection, ie. analytics",
        "settings_template" => "Site Template Name:",
        "settings_template_placeholder" => "Enter the name of a template",
        "settings_timezone" => "Post Timezone:",
        "settings_timezone_placeholder" => "Enter a timezone",
        "settings_basepath" => "Site Base Path:",
        "settings_basepath_placeholder" => "Enter the base path",
        "settings_password_legend" => "Last but not least, the password:",
        "settings_password_placeholder" => "Choose a good password",
        "settings_password_legend_update" => "Type your password to update your blog:",
        "settings_password_placeholder_update" => "Management password",
        "settings_submit_creation" => "Create Your Blog",
        "settings_submit_update" => "Update Your Blog",
        "settings_dashboard_return" => "Return To Dashboard",
        "dashboard_title" => "Your Blog Dashboard",
        "dashboard_write_post" => "Write A Blog Post",
        "dashboard_settings" => "Edit The Site Settings",
        "dashboard_logout" => "Log Out",
        "dashboard_all_post" => "All Posts:",
        "dashboard_posted_by" => "Posted by",
        "dashboard_post_fulldate" => "%B %d, %Y, %I:%M %p",
        "dashboard_publish" => "Publish",
        "dashboard_draft" => "Make Draft",
        "dashboard_edit" => "Edit",
        "dashboard_delete" => "Delete",
        "login_title" => "Log Into Your Blog",
        "login_password_legend" => "Type your password to update your blog:",
        "login_password_placeholder" => "Management password",
        "login_submit" => "Log In",
        "private_title" => "Private Post",
        "private_password_legend" => "Type your password to access private post:",
        "private_password_placeholder" => "Post password",
        "private_submit" => "Unlock",
        "write_title" => "Time to write your prose",
        "write_post_title_placeholder" => "The post title",
        "write_post_author_placeholder" => "The post author",
        "write_post_image_placeholder" => "A featured image for this post",
        "write_post_password_placeholder" => "Password if you want to hide the post",
        "write_post_markdown_placeholder" => "Write your post here, you can use Markdown",
        "liquid_home_postedby" => "Posted by",
        "liquid_home_date" => "%B %d, %Y",
        "liquid_home_newer" => "Newer Posts",
        "liquid_home_older" => "Older Posts",
        "liquid_post_date" => "%B %d, %Y",

    ],
    "fr_FR" => [
        "locale" => "fr_FR",
        "dateformat" => "%A %d %B %G",
        "settings_i18n" => "Internationalisation:",
        "settings_blog_creation" => "Création du blog",
        "settings_blog_edition" => "Edition des paramétres",
        "settings_legend" => "D'abord, quelques infos:",
        "settings_blog_name" => "Nom du blog:",
        "settings_blog_name_placeholder" => "Entrez un nom pour votre blog",
        "settings_blog_info" => "Description:",
        "settings_blog_info_placeholder" => "Entrez la description du blog",
        "settings_footer_message" => "Pied de page:",
        "settings_footer_message_placeholder" => "Entrez un message de pied de page",
        "settings_header_inject" => "Injection de Code en En-tête:",
        "settings_header_inject_placeholder" => "Entrez un code d'en-tête, ex: statistique",
        "settings_template" => "Template du site:",
        "settings_template_placeholder" => "Entrez le nom du template",
        "settings_timezone" => "Fuseau horaire:",
        "settings_timezone_placeholder" => "Entrez une timezone",
        "settings_basepath" => "Dossier du site:",
        "settings_basepath_placeholder" => "Entrez le dossier de base du site",
        "settings_password_legend" => "Le dernier mais non le moindre, votre mot de passe",
        "settings_password_placeholder" => "Choisissez un bon mot de passe",
        "settings_password_legend_update" => "Entrez votre mot de passe pour mettre à jour le blog:",
        "settings_password_placeholder_update" => "Mot de passe d'administration",
        "settings_submit_creation" => "Créez votre blog",
        "settings_submit_update" => "Mettre à jour",
        "settings_dashboard_return" => "Retour au tableau de bord",
        "dashboard_title" => "Votre tableau de bord",
        "dashboard_write_post" => "Ecrire un article",
        "dashboard_settings" => "Paramètres du site",
        "dashboard_logout" => "Déconnexion",
        "dashboard_all_post" => "Tous les articles:",
        "dashboard_posted_by" => "Publié par",
        "dashboard_post_fulldate" => "%A %d %B %G à %H:%M",
        "dashboard_publish" => "Publier",
        "dashboard_draft" => "Passer en Brouillon",
        "dashboard_edit" => "Editer",
        "dashboard_delete" => "Supprimer",
        "login_title" => "Connecter vous à votre blog",
        "login_password_legend" => "Taper votre mot de passe:",
        "login_password_placeholder" => "Mot de passe d'administration",
        "login_submit" => "Connexion",
        "private_title" => "Article privé",
        "private_password_legend" => "Tapez le mot de passe pour accèder à cet article:",
        "private_password_placeholder" => "Mot de passe de l'article",
        "private_submit" => "Déverouiller",
        "write_title" => "C'est le moment de composer",
        "write_post_title_placeholder" => "Titre de l'article",
        "write_post_author_placeholder" => "Nom de l'auteur",
        "write_post_image_placeholder" => "Image de description",
        "write_post_password_placeholder" => "Mot de passe, pour rendre l'article privée",
        "write_post_markdown_placeholder" => "Ecrivez votre article ici en markdown",
        "liquid_home_postedby" => "Publié par",
        "liquid_home_date" => "%A %d %B %G",
        "liquid_home_newer" => "Articles récents",
        "liquid_home_older" => "Articles anciens",
        "liquid_post_date" => "%A %d %B %G",
    ]
];

function i18n($index, $echo = true){
    global $siteConfig;
    global $language;
    $en = "en_US";
    $i18n = empty($siteConfig['I18N'])?$en:$siteConfig['I18N'];
    $default_value = isset($language[$en][$index])?$language[$en][$index]:$index;
    $value = isset($language[$i18n][$index])?$language[$i18n][$index]:$default_value;
    if($echo){
        echo $value;
    }
    return $value;
}

setlocale(LC_ALL, i18n('locale',false));

?>