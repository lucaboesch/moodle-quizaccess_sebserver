<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for the quizaccess_sebserver plugin.
 *
 * @package   quizaccess_sebserver
 * @author    Kristina Isacson (kristina.isacson@id.ethz.ch)
 * @copyright 2024 ETH Zurich
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// phpcs:disable moodle.Files.LangFilesOrdering.IncorrectOrder

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'SEB Server';
$string['quizismanagedbysebserver'] = 'Die Prüfung wird von SEB Server verwaltet. Sie müssen den Safe Exam Browser starten, bevor Sie an der Prüfung teilnehmen.';
$string['managedbysebserver'] = 'Die Prüfung wird von SEB Server verwaltet. Das Ändern von Werten kann sich auf die Prüfungseinstellungen auswirken, bitte gehen Sie vorsichtig vor. Sie können die Verbindung zum SEB-Server über den Abschnitt SEB-Server unten deaktivieren';
$string['enablesebserver'] = 'SEB Server aktivieren';
$string['sebserver:managesebserver'] = 'SEB Server verwalten';
$string['privacy:metadata'] = 'Das SEB Server Plugin speichert keine personenbezogenen Daten.';
$string['connectionnotsetupyet'] = 'Die Verbindung wurde noch nicht konfiguriert.';
$string['notemplate'] = 'Keine Vorlage';
$string['sebserverexamtemplate'] = 'Exam Vorlage';
$string['sebserverexamtemplate_help'] = 'Wählen Sie eine Exam Vorlage aus, die zu Ihrem Prüfungszenario passt.';
$string['showquitbtn'] = 'SEB Beenden Button anzeigen';
$string['sebserverquitsecret'] = 'SEB Beenden/Entsperren Kennwort';
$string['sebserverquitsecret_help'] = 'Dieses Kennwort wird abgefragt, wenn Sie SEB mittels Beenden-Taste oder Strg-Q (Cmd-Q) beenden wollen. Wenn kein SEB Beenden/Entsperren-Passwort gesetzt ist, fragt SEB nur "Sind Sie sicher, dass Sie SEB beenden wollen?".';
$string['modificationinstruction'] = 'Falls Sie Einstellungen ändern wollen, müssen Sie SEB Server deaktivieren und die Test-Einstellungen speichern, dann wieder SEB Server aktivieren. Nun können Sie neue Werte für die Einstellungsfelder wählen und die Test-Einstellungen speichern.';
$string['adminsonly'] = 'Nur für Website-Administratoren';
$string['resetseb'] = 'SEB Server Verbindung aufheben';
$string['resetseb_help'] = 'Website-Administratoren können die Verbindung zum SEB Server aufheben.';
$string['examnotrestrictedyet'] = 'Die Überprüfung des Browser Exam Keys ist nicht aktiviert! Damit der Test absolviert werden kann, muss im SEB Server die Überprüfung des Browser Exam Key aktiviert werden.';
$string['launchsebserverconfig'] = 'Safe Exam Browser starten';
$string['downloadsebserverconfig'] = 'SEB Server Konfiguration herunterladen';
$string['sebseverconfignotfound'] = ' SEB Server Konfiguration ist nicht vorhanden';
$string['autologintosebserver'] = 'SEB Server Monitoring';
$string['templatemustbeselected'] = 'Sie müssen eine Exam Vorlage wählen';
$string['connectionid'] = 'Verbindungs ID';
$string['connectionname'] = 'Verbindungsname';
$string['connectionurl'] = 'Verbindungs-Endpoint';
$string['autologinurl'] = 'SEB Server Autologin';
$string['accesstoken'] = 'Token';
$string['templateid'] = 'ID';
$string['templatename'] = 'Name';
$string['templatedescription'] = 'Beschreibung';
$string['templates'] = 'Vorlagen';
$string['setting:sebserverconnectiondetails'] = 'Verbindungsangaben';
$string['setting:sebserversettings'] = 'Einstellungen';
$string['quizaccess/sebserver:canusesebserver'] = 'Kann SEB Server verwenden';
$string['quizaccess/sebserver:candeletesebserver'] = 'Kann SEB Server deaktivieren';
$string['quizaccess/sebserver:managesebserverconnection'] = 'Kann die Seb Server Verbindung verwalten';
$string['quizaccess/seb:sebserverautologinlink'] = 'Kann automatisch in SEB Server einloggen';
$string['selectemplate'] = 'Exam Vorlage auswählen';
$string['sebservertemplateid'] = 'SEB Server Vorlage';
$string['sebservertemplateid_help'] = 'Wählen Sie eine SEB Server Vorlage, die zu Ihrem Prüfungszenario passt.';
$string['manageddevicetemplate'] = 'Exam Konfiguration ID=';
