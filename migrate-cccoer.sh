#!/usr/bin/env bash

wp theme activate oeglobal/resources
wp plugin activate breadcrumb-navxt wp-pagenavi soil yet-another-related-posts-plugin
wp plugin deactivate classic-editor jetpack twitter wp-rocket

home_id=`wp post create --post_type=page --post_title='Home' --page_template=views/template-cccoer-home.blade.php --post_status=publish --porcelain`
wp option update page_on_front $home_id
wp option update show_on_front page
wp menu location assign 470 footer_navigation

wp post create --post_type=page --post_title='Search' --page_template=views/template-search.blade.php --post_status=publish
wp post update 4499 --page_template=views/template-cccoer-members-list.blade.php
wp post create --post_type=page --post_title='Member Information' --post_name='view' --page_template=views/template-members-detail.blade.php --post_status=publish --post_parent=4499

wp option patch update pagenavi_options use_pagenavi_css 0
wp option patch update pagenavi_options pages_text ''
wp option patch update pagenavi_options prev_text '⇠ Previous'
wp option patch update pagenavi_options next_text 'Next ⇢'

