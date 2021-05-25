<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_ldap', language 'kk', version '3.10'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_bind_dn'] = 'Егер пайдаланушыларды іздеуде байланысқан пайдаланушы керек болса, мына жерде көрсетіңіз. Мысалы, \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Пайдаланушыларды байлансытыруға арналған кілтсөз.';
$string['auth_ldap_contexts'] = 'Пайдаланушылар орналасқан контексттер тізімі. Әртүрлілерін ажыратып алыңыз \';\'. Мысалы: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Егер, Сіз, пайдаланушыларға поштамен растау арқылы тіркелуге рұқсат берсеңіз, пайдаланушылар жазылатын контекстті анықтаңыз. Қауіпсіздікпен туындауы мүмкін қиындықтардың алдын алу үшін, ол контекст басқаларынан өзгеше болуы керек. Контекст атауын ldap_context-айнымалыларға қосудың қажеті жоқ, жүйе пайдаланушыларды осы контексттен автоматты түрде іздейді.';
$string['auth_ldap_host_url'] = 'LDAP-хостты URL\'а түрінде көрсетіңіз, мысалы: \'ldap://ldap.myorg.com/\' немесе \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'Пайдаланушының топқа тиістілігін анықтайтын төлсипатты белгілеңіз. Әдетте \'қатысушы\'';
$string['auth_ldap_search_sub'] = 'Пайдаланушыларды ішкі мәтінмәндермен іздеуді ұнатсаңыз, <> 0 мәнін көрсетіңіз.';
$string['auth_ldap_update_userinfo'] = 'Пайдаланушының ақпаратын (Аты, Тегі, адресі ..) LDAP-тан жүйесіне дейін жаңартыңыз. /auth/ldap/attr_mappings.php ақпаратты көрсету үшін қараңыз.';
$string['auth_ldap_user_attribute'] = 'Аты/іздеу-ге пайдаланылатын төлсипат. Әдетте, \'cn\'.';
$string['auth_ldap_version'] = 'Серверіңіз пайдаланатын LDAP хаттамасының нұсқасы.';
$string['auth_ldapdescription'] = 'Бұл әдіс LDAP-сервер көмегімен аутентификацияны қамтамассыз етеді. Егер берілген логин мен кілтсөз қабылданса, жүйенің мәліметтерінің қорында жаңа пайдаланушының тіркелгісі жасалады. Бұл модуль LDAP-сервердің өрістерін оқып, жүйедегі керекті аймақтарды (өрістерді) толтыра алады. Ары қарай тек логин мен кілтсөз толтырылады';
$string['auth_ldapextrafields'] = 'Бұл қосымша өрістер. Осында көрсетілген, пайдаланушы мәліметтерінің кейбір өрістерін LDAP-тан алдын ала толтыруды таңдай аласыз.<p>LDAP-тан мәліметтерді тасымалдамау үшін, өрісті толтырмаңыз.</p><p> Кез-келген жағдайда, пайдаланушы жүйеге кіргеннен кейін, барлық өрістерді өңдей алады.</p>';
$string['pluginname'] = 'LDAP-серверді пайдалану';
