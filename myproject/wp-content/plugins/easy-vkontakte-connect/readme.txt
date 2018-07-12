=== Easy VKontakte Connect ===
Contributors: alekseysolo
Tags: vkontakte, vk, autopublish, post, social, share, wall, analytics, comments, polls, surveys, woocommerce
Requires at least: 3.5
Tested up to: 4.9
Stable tag: 2.5
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Автопубликация записей с фото на стене ВКонтакте, анализ групп, кнопки, виджеты...

== Description ==

Весь API ВКонтакте. 

* Автопубликация записей с фото на стену группы и на **!!!** **личные страницы** ВКонтакте. Поддерживаются post_type.
* &laquo;[Сообщения сообщества](http://ukraya.ru/1729/community_messages "&laquo;Сообщения сообщества&raquo; – новый виджет ВКонтакте для общения с посетителями сайта")&raquo; - **!!!** **новый** виджет ВКонтакте для общения с посетителями сайта.
* Шорткод для виджета ВКонтакте &laquo;[Напишите нам](http://ukraya.ru/1607/vk_contact_us "&laquo;Напишите нам&raquo; – новый виджет ВКонтакте и шорткод в плагине Easy VKontakte Connect")&raquo;.
* **!!!** ФотоАльбомы ВКонтакте теперь на сайте!
* Кнопки Поделиться: 7 социальных сетей, интерактивный настройщик, 4 темы и множество вариантов отображения. Сети: ВКонтакте, Одноклассники, Мой Мир, Facebook, Google+, Twitter, Pinterest.
* Социальный замок: чтобы увидеть закрытое содержимое на сайте, нужно подписаться на группу ВКонтакте.
* Авторизация через ВКонтакте.
* Опросы ВКонтакте: создать, добавить на сайт, **!!!** отправить в группу, поделиться.
* Виджет комментариев ВКонтакте; респонсивный. **!!!** Оповещение на почту о комментариях из виджета.
* Индексация & импорт комментариев, оставленных через виджет комментариев ВКонтакте.
* Виджет сообществ ВКонтакте.
* **!!!** Поддержка авторизации через ВК для **WooCommerce**.
* Невероятная четверка сайдбаров: всплывающий, выезжающий, до и после контента.
* Анализ групп ВКонтакте.

Подробности и техническая поддержка [на сайте плагина](http://ukraya.ru/428/easy-vkontakte-connect-evc "Техническая поддержка"). 


This plugin allows you to publish posts on the VKontakte wall in automatic or manual mode, along with the images attached to post and provide VKontakte Wall Analytics.

* Uses the API VKontakte
* **!!!** Social share buttons with interactive builder. jQuery part based on the Social Likes library by Artem Sapegin, [git](https://github.com/sapegin/social-likes "Social Likes library by Artem Sapegin").
* VK Community Widget
* Sidebars: overlay, slide, before and after posts; triggered by timeout or scrolling actions.
* Provide VKontakte Wall Analytics: Sort group wall posts by: likes, reposts, comments, publish time
* Automatically publish new posts on the VKontakte wall
* Manually publish posts on the VKontakte wall
* Publish images attached to the posts on the VKontakte wall 
* Note categories of posts which are ecluded from autopublish to VKontakte wall

Requires WordPress 3.2 and PHP 5.

== Installation ==

1. Установите и активируйте плагин.
1. Настройте **VK API** на вкладках *Для автопостинга* и *Для виджетов* в меню плагина: *EVC* - *Настройки VK API*.
**Внимание!** В каждой вкладке нужно создать приложение в ВК **своего типа**.
1. Чтобы добавить на страницу виджет Сообщества, нужно: в меню *Внешний вид* - *Виджеты* - в любой из сайдбаров добавить виджет *VK Сообщества* и настроить его.

**Описание меню плагина EVC**

1. *Автопостинг* - настройки для автопостинга.
1. *Комментарии* - настройки виджета *Комментариев ВК* и импорта комментариев.
1. *Кнопки и Виджеты* - настройки виджета *Сообщения сообществ*, кнопки *Поделиться*, *Авторизации через ВК*.
1. *Лог* - лог действий плагина. Если что-то идет не так, там отображаются возможные ошибки. При возникновении проблем нужно скопировать последние записи из Лога и отправить в [службу поддержки](http://ukraya.ru/428/easy-vkontakte-connect-evc "Техническая поддержка") плагина.

== Frequently Asked Questions ==

= Ошибка: VK Error. 5 User authorization failed: invalid session. =

Попробуйте выйти из аккаунта ВК и затем зайти снова введя логин и пароль. После этого попробуйте заново получить токен в плагине (*EVC* - *Настройки VK API*).

== Screenshots ==

1. Social Likes Buttons Themes and Variation.
2. VK API Settings.
3. Sidebars Settings.
4. Autopost Settings.
5. VK Community Widget.
6. Edit Post Page.
7. VKontakte Wall Analytics page.

== Changelog ==

= 2.5 / 2018-05-29 =
* Fixed minor bugs. / 2018-03-05 / 2.4.002
* VK albums display on is_singular. / 2018-03-19 / 2.4.003
* Fixed access token in import comments from VK widget. / 2018-05-23 / 2.4.004
* Fixed conflict with getting token when vk market for woocommerce is installed. / 2018-05-29 / 2.4.005
* Added new mask for autoposting: author. / 2018-05-29 / 2.4.006
* Added new masks for autoposting in pro version support: meta_tags, meta_cats, vk_author. / 2018-05-29 / 2.4.007
* Added feature to connect/disconnect user site account with VK account. Futher authorization via VK are supported. / 2018-05-29 / 2.4.008
* Social Likes updated to version 3.1.3 / 2018-05-29 / 2.4.009

= 2.4.1 / 2018-03-05 =
* Fixed error with v param in VK Group Analytics. / 2018-03-05 / 2.4.001

= 2.4 / 2018-03-01 =
* Fixed shortcodes inside vk_lock shortcode. / 2017-10-17 / 2.3.15
* Fixed sidebars open times. / 2017-12-04 / 2.3.16
* Fixed error with v param in VK requests. / 2018-03-01 / 2.3.17

= 2.3.2 / 2017-13-10 =
* Fixed php 7.1 compatibility. / 2017-06-22 / 2.3.07
* Fixed installing additional plugins from ads. / 2017-06-22 / 2.3.08
* Remove filter evc_buttons_the_content from evc-stats. / 2017-06-22 / 2.3.09
* Fixed idn_to_ascii url converting in wall_post attachments. / 2017-09-11 / 2.3.10
* Added the ability to send up to 6 photos in post to VK. / 2017-09-15 / 2.3.11
* Fixed VK Comments Widgets in pages. / 2017-09-27 / 2.3.12
* Added responsive design in plugin settings pages. / 2017-10-13 / 2.3.13
* Remove link to VK Group Analysis from admin bar. / 2017-10-13 / 2.3.14

= 2.3.1 / 2017-06-19 =
* VK Photo Albums ORDER BY date ASC - shows the sequence of photos as in VK. / 2017-02-08 / 2.3.03
* Fixed bugs. / 2017-04-06 / 2.3.04
* Fixed php 7 compatibility; using existing token to resolve screen name. / 2017-04-09 / 2.3.05
* Updated social-likes to 3.1.2 / 2017-06-19 / 2.3.06

= 2.3 /  2016-12-18 =
* Change url to vk apps manage. / 2016-07-07 / 2.2.003
* Added timeout to vk api requests. / 2016-11-16 / 2.2.004
* Fixed bug when multiple onload on page. / 2016-12-15 / 2.2.005
* Added VK Community Messages widget. / 2016-12-15 / 2.2.006

= 2.2.1 /  2016-08-17 =
* Changed widgets headers from h1 to h2. / 2016-07-07 / 2.2.001
* IMPORTANT!!! Fixed layout compatibility with WP 4.6. / 2016-08-17 / 2.2.002

= 2.2 / 2016-07-05 =
* Added evc activation date as option. / 2016-06-16 / 2.1.201
* Added the ability to send only attachments without text. / 2016-06-27 / 2.1.202
* Added compatibility with evc-multigroup. / 2016-06-30 / 2.1.203
* Added new VK widget Contact Us. / 2016-07-05 / 2.1.204

= 2.1.2 / 2016-06-15 =
* Fixed minor bug in Log display. / 2016-02-17 / 2.1.102
* Removed unnecessary files. / 2016-02-22 / 2.1.103
* Fixed (maybe) problem with blog installation in subfolder (access token). / 2016-02-22 / 2.1.104
* Fixed problem with blog installation in subfolder (access token). / 2016-03-19 / 2.1.105
* Added minor improvements. / 2016-04-11 / 2.1.106
* Changed transport for sending photo to VK. / 2016-04-17 / 2.1.107
* Optimized work of social buttons. / 2016-06-14 / 2.1.108
* Added requests timout as option. / 2016-06-14 / 2.1.109

= 2.1.1 / 2016-02-17 =
* Fixed important bug with cache request to vk when use vk-albums. / 2016-02-17 / 2.1.101

= 2.1 / 2016-02-16 =
* Fixed bug (removed double option autopost_old_order in evc-autopost page). / 2015-12-24 / 2.0.101
* Removed top admin panel ads. / 2015-12-25 / 2.0.102
* Fixed file upload to vk via curl in php >= 5.5 (CURLFile). / 2016-01-20 / 2.0.103
* Updated social-likes to 3.1. / 2016-01-21 / 2.0.104
* Fixed sidebar order in widget settings page. / 2016-01-22 / 2.0.105
* Added is_singular filter to buttons. / 2016-02-07 / 2.0.106
* Added option to disable evc_buttons_load_scripts on frontend. / 2016-02-07 / 2.0.107
* Updated jquery.sticky-kit.js to v1.1.2 / 2016-02-07 / 2.0.108

= 2.0.1 / 2015-12-22 =
* Fixed bug (display collage_gallery shortcode in new post even vk photoalbum url not included in post).

= 2.0 / 2015-12-22 =
* Added Autoposting to personal pages. / 2015-11-23
* Fixed refresh comments from vk post. / 2015-11-24
* Fixed ajaxurl. / 2015-11-28
* Added WooCommerce support (authorization, checkout button and personal data storage). / 2015-12-07 / 1.9.52
* Fixed VK Group Widget for display Personal Pages / 2015-12-16 / 1.9.53
* Show photos from VK Photoalbums on site. / 2015-12-20 / 2.0

= 1.9.4 / 2015-11-02 =
* Fixed get_avatar filter for comments.  / 2015-08-08
* Remove new-line and carriage return replace by double new-line in evc_make_excerpt.  / 2015-09-04
* Added new masks for Autoposting: teaser, teaserORexcerpt. / 2015-09-27
* Added scope video to vk api for autoposting . / 2015-09-27
* Fixed evc_vkapi_resolve_screen_name, now works with any token (site or autopost). / 2015-09-29
* Added shortcode [vk_subscribe]. / 2015-09-29
* Change add_menu_page position. / 2015-10-20

= 1.9 / 2015-07-24 =
* Added VK Comments Browser Widget in admin side.
* Fixed post author and moderator notification about new comments added via VK Comments Widget.
* Added comments compability with another plugin. / 2015-04-08
* Added capability disable / enable share buttons on page types. / 2015-04-08
* Fixed post_ID for comments in some themes. / 2015-03-27

= 1.8.3.1 / 2015-03-26 =
* Added superglobal options for buttons inserting.

= 1.8.3 / 2015-03-18 =
* Added post_types filters for autoposting.
* Fixed Emoji in Groups Analytics.
* Fixed quotes in social buttons.
* Added overlay-sidebar responsivity.
* Added social-likes 2015-03-10 v3.0.14

= 1.8.2 / 2014-12-30 =
* Added features setting VK Comments widget and Share Buttons for each pages and posts separetly.
* Added Responsivity for VK Comments Widget.
* Added ability to place shortcode in widgets.
* Fixed problem with ad column.
* Fixed wrong shortcode for polls in All Poll page.
* Added evc-polls vk error 17 handler.
* Added social-likes 2014-12-11 v3.0.10

= 1.8.1 / 2014-10-27 =
* New sidebar action: when leave the page. Increase your conversion!
* Fix minor bugs.

= 1.8 / 2014-09-29 =
* Added social share buttons with interactive builder.
* Added slide sidebar responsive width.
* Added vk community shortcode.
* Fixed minor bugs in comments widget.

= 1.7.1 / 2014-08-05 =
* **!!!** Added compatibility with Amazing Group Members Online Stats in PRO version.
* Added missing option Show VK login button.
* Changed autopost method, maybe increased posted text size.
* Added additional error handler.

= 1.7 / 2014-07-14 =
* Added VK Athorization.
* Added Social Locker.
* Etc...

= 1.6 / 2014-07-01 =
* Add VK Polls widget.
* Fix error in VK Community Widget.
* Etc...

= 1.5.1 / 2014-05-06 =
* Fix undefined variable in evc_share_meta.

= 1.5 =
* **Important** Added VK Comments Indexation feature.
* Return parameters wide in VK Cummunity Widget settings.

= 1.4 =
* Add VK Comments Widget.

= 1.3.1 =
* Correct links in message.
* Add dashicons to front page.

= 1.3 =
* VK Community Widget
* Sidebars: overlay, slide, before and after posts; triggered by timeout or scrolling actions.

= 1.1 =
* **Important:** Correct to correspond VK API changes in photos.getWallUploadServer, photos.saveWallPhoto.
* **Important:** Correct access token scopes.
* Set sslverify = false in wp_remote_get.
* Add capability to show link to Group Analytics in admin bar.

= 1.0 =
* **New:** Provide VKontakte Wall Analytics.
* Process captcha if needed.
* New tags %link% in wall post publish mask.
* Cut posts in accordance with the VKontakte limits.
* Paragraph tags now are replaced by \n\n.

= 0.2 =
* Fix minor bugs.

= 0.1 =
* First stable release.


== Upgrade Notice ==

= 2.4.1 =
Исправлена блокирующая ошибка в меню EVC - Анализ групп ВКонтакте.
