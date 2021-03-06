<?php

/**
 * import.php
 * Copyright (c) 2018 thegrumpydictator@gmail.com
 *
 * This file is part of Firefly III.
 *
 * Firefly III is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Firefly III is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Firefly III. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // ALL breadcrumbs and subtitles:
    'index_breadcrumb'                     => 'Daten in Firefly III importieren',
    'prerequisites_breadcrumb_fake'        => 'Voraussetzungen für den Scheinimportanbieter',
    'prerequisites_breadcrumb_spectre'     => 'Voraussetzungen für Spectre',
    'prerequisites_breadcrumb_bunq'        => 'Voraussetzungen für bunq',
    'job_configuration_breadcrumb'         => 'Konfiguration für „:key”',
    'job_status_breadcrumb'                => 'Importstatus für „:key”',
    'cannot_create_for_provider'           => 'Firefly III konnte keine Aufgabe für den Anbieter „:provider” erstellen.',

    // index page:
    'general_index_title'                  => 'Datei importieren',
    'general_index_intro'                  => 'Willkommen beim Importassistenten von Firefly III. Es gibt einige Möglichkeiten, Daten in Firefly III zu importieren, die hier als Schaltflächen angezeigt werden.',
    // import provider strings (index):
    'button_fake'                          => 'Importfunktion testen',
    'button_file'                          => 'Datei importieren',
    'button_bunq'                          => 'Von „bunq” importieren',
    'button_spectre'                       => 'Importieren mit Spectre',
    'button_plaid'                         => 'Import mit Plaid',
    'button_yodlee'                        => 'Importieren mit Yodlee',
    'button_quovo'                         => 'Import mit Quovo',
    // global config box (index)
    'global_config_title'                  => 'Allgemeine Importkonfiguration',
    'global_config_text'                   => 'In Zukunft wird dieses Feld Einstellungen enthalten, die für ALLE oben genannten Importanbieter gelten.',
    // prerequisites box (index)
    'need_prereq_title'                    => 'Importvoraussetzungen',
    'need_prereq_intro'                    => 'Einige Importmethoden benötigen Ihre Aufmerksamkeit, bevor sie verwendet werden können. Beispielsweise benötigen sie spezielle API-Schlüssel oder Anwendungsgeheimnisse. Sie können sie hier konfigurieren. Das Symbol zeigt an, ob diese Voraussetzungen erfüllt sind.',
    'do_prereq_fake'                       => 'Voraussetzungen für den Scheinanbieter',
    'do_prereq_file'                       => 'Voraussetzungen für den Dateiimport',
    'do_prereq_bunq'                       => 'Voraussetzungen für den Import aus Bunq',
    'do_prereq_spectre'                    => 'Voraussetzungen für den Import mit Spectre',
    'do_prereq_plaid'                      => 'Voraussetzungen für den Import mit Plaid',
    'do_prereq_yodlee'                     => 'Voraussetzungen für den Import mit Yodlee',
    'do_prereq_quovo'                      => 'Voraussetzungen für den Import mit Quovo',
    // provider config box (index)
    'can_config_title'                     => 'Einstellungen importieren',
    'can_config_intro'                     => 'Einige Importmethoden können nach Ihren Wünschen konfiguriert werden. Sie verfügen über zusätzliche Einstellungen, die Sie anpassen können.',
    'do_config_fake'                       => 'Konfiguration für den Scheinanbieter',
    'do_config_file'                       => 'Konfiguration für Dateiimporte',
    'do_config_bunq'                       => 'Konfiguration für den Import aus bunq',
    'do_config_spectre'                    => 'Konfiguration für den Import aus Spectre',
    'do_config_plaid'                      => 'Konfiguration für den Import aus Plaid',
    'do_config_yodlee'                     => 'Konfiguration für den Import aus Yodlee',
    'do_config_quovo'                      => 'Konfiguration für den Import aus Quovo',

    // prerequisites:
    'prereq_fake_title'                    => 'Voraussetzungen für einen Import vom Scheinimportanbieter',
    'prereq_fake_text'                     => 'Dieser Scheinanbieter benötigt einen eigenen API-Schlüssel. Dieser muss 32 Zeichen lang sein. Sie können diese hier verwenden: 123456789012345678901234567890',
    'prereq_spectre_title'                 => 'Voraussetzungen für einen Import durch Verwendung der Spectre-API',
    'prereq_spectre_text'                  => 'Um Daten über die Spectre-API (v4) zu importieren, müssen Sie Firefly III zwei geheime Werte zur Verfügung stellen. Diese können auf der <a href="https://www.saltedge.com/clients/profile/secrets">Geheimnisse-Seite</a> gefunden werden.',
    'prereq_spectre_pub'                   => 'Ebenso muss die Spectre-API den öffentlichen Schlüssel kennen, der unten angezeigt wird. Ohne diesen wird sie Sie nicht erkennen. Bitte geben Sie diesen öffentlichen Schlüssel auf Ihrer <a href="https://www.saltedge.com/clients/profile/secrets">Geheimnisse-Seite</a> ein.',
    'prereq_bunq_title'                    => 'Voraussetzungen für einen Import von bunq',
    'prereq_bunq_text'                     => 'Um aus „bunq” importieren zu können, benötigen Sie einen API-Schlüssel. Sie können diesen über die App bekommen. Bitte beachten Sie, dass sich die Importfunktion von „bunq” noch im BETA-Stadium befindet. Es wurde nur gegen die Sandbox-API getestet.',
    'prereq_bunq_ip'                       => '„bunq” benötigt Ihre öffentlich zugängliche IP-Adresse. Firefly III versuchte, diese mithilfe <a href="https://www.ipify.org/">des ipify-Diensts </a> auszufüllen. Stellen Sie sicher, dass diese IP-Adresse korrekt ist, da sonst der Import fehlschlägt.',
    // prerequisites success messages:
    'prerequisites_saved_for_fake'         => 'Schein-API-Schlüssel erfolgreich gespeichert!',
    'prerequisites_saved_for_spectre'      => 'App-ID und Geheimnis gespeichert!',
    'prerequisites_saved_for_bunq'         => 'API-Schlüssel und IP gespeichert!',

    // job configuration:
    'job_config_apply_rules_title'         => 'Aufgabenkonfiguration - Regeln übernehmen?',
    'job_config_apply_rules_text'          => 'Sobald der Scheinanbieter ausgeführt wird, können Ihre Regeln auf die Buchungen angewendet werden. Dies erhöht die Zeit für den Import.',
    'job_config_input'                     => 'Ihre Eingaben',
    // job configuration for the fake provider:
    'job_config_fake_artist_title'         => 'Albumname eingeben',
    'job_config_fake_artist_text'          => 'Viele Importassistent haben einige Konfigurationsschritte, die Sie ausführen müssen. Im Falle des gefälschten Importanbieters müssen Sie einige seltsame Fragen beantworten. Geben Sie in diesem Fall „David Bowie” ein, um fortzufahren.',
    'job_config_fake_song_title'           => 'Titelnamen eingeben',
    'job_config_fake_song_text'            => 'Nennen Sie den Song „Goldene Jahre”, um mit dem Scheinimport fortzufahren.',
    'job_config_fake_album_title'          => 'Albumname eingeben',
    'job_config_fake_album_text'           => 'Einige Importassistenten benötigen nach der Hälfte des Imports zusätzliche Daten. Im Falle des Scheinimportanbieter müssen Sie einige seltsame Fragen beantworten. Geben Sie „Station zu Station” ein, um fortzufahren.',
    // job configuration form the file provider
    'job_config_file_upload_title'         => 'Import einrichten (1/4) • Ihre Datei hochladen',
    'job_config_file_upload_text'          => 'Diese Assistent wird Ihnen helfen, Dateien von Ihrer Bank in Firefly III zu importieren. ',
    'job_config_file_upload_help'          => 'Wählen Sie Ihre Datei aus. Bitte stellen Sie sicher, dass die Datei UTF-8-kodiert ist.',
    'job_config_file_upload_config_help'   => 'Wenn Sie zuvor Daten in Firefly III importiert haben, verfügen Sie möglicherweise über eine Konfigurationsdatei, die Ihnen die Konfigurationswerte vorgibt. Für einige Banken haben andere Benutzer freundlicherweise ihre<a href="https://github.com/firefly-iii/import-configurations/wiki">Konfigurationsdatei</a> zur Verfügung gestellt.',
    'job_config_file_upload_type_help'     => 'Typ der hochzuladenden Datei auswählen',
    'job_config_file_upload_submit'        => 'Dateien hochladen',
    'import_file_type_csv'                 => 'CSV (Kommagetrennte Werte)',
    'file_not_utf8'                        => 'Die hochgeladene Datei ist nicht als UTF-8 oder ASCII kodiert. Firefly III kann mit solchen Dateien nicht umgehen. Bitte verwenden Sie „Notepad++” oder „Sublime”, um Ihre Datei in UTF-8 zu konvertieren.',
    'job_config_uc_title'                  => 'Import einrichten (2/4) • Allgemeine Datei-Einstellungen',
    'job_config_uc_text'                   => 'Um Ihre Datei korrekt importieren zu können, überprüfen Sie bitte die folgenden Optionen.',
    'job_config_uc_header_help'            => 'Markieren Sie dieses Feld, wenn die erste Zeile Ihrer CSV-Datei die Spaltenüberschriften enthält.',
    'job_config_uc_date_help'              => 'Datumsformat in Ihrer Datei. Folgen Sie dem auf <a href="https://secure.php.net/manual/en/datetime.createfromformat.php#refsect1-datetime.createfromformat-parameters">dieser Seite</a> angegebenen Format. Der Standardwert analysiert Daten, die wie folgt aussehen: :dateExample.',
    'job_config_uc_delimiter_help'         => 'Wählen Sie das Feldtrennzeichen, das in Ihrer Eingabedatei verwendet wird. Wenn nicht sicher, ist das Komma die sicherste Option.',
    'job_config_uc_account_help'           => 'Wenn Ihre Datei KEINE Informationen über Ihr(e) Anlagenkont(o/en) enthält, wählen Sie über dieses Auswahlmenü aus, zu welchem Konto die Buchungen in der Datei gehören.',
    'job_config_uc_apply_rules_title'      => 'Regeln anwenden',
    'job_config_uc_apply_rules_text'       => 'Wendet Ihre Regeln auf jede importierte Buchung an. Beachten Sie, dass dies den Import erheblich verlangsamt.',
    'job_config_uc_specifics_title'        => 'Bankspezifische Einstellungen',
    'job_config_uc_specifics_txt'          => 'Einige Banken liefern schlecht formatierte Dateien. Firefly III kann diese automatisch korrigieren. Wenn Ihre Bank solche Dateien liefert, diese aber hier nicht aufgeführt sind, öffnen Sie bitte einen Fehlerbericht auf GitHub.',
    'job_config_uc_submit'                 => 'Fortsetzen',
    'invalid_import_account'               => 'Sie haben ein ungültiges Konto zum Importieren ausgewählt.',
    // job configuration for Spectre:
    'job_config_spectre_login_title'       => 'Wählen Sie Ihre Zugangsdaten',
    'job_config_spectre_login_text'        => 'Firefly III hat :count bestehende Zugangsdaten in Ihrem Spectre-Konto gefunden. Von welchem möchten Sie importieren?',
    'spectre_login_status_active'          => 'Aktiv',
    'spectre_login_status_inactive'        => 'Inaktiv',
    'spectre_login_status_disabled'        => 'Deaktiviert',
    'spectre_login_new_login'              => 'Melden Sie sich bei einer anderen Bank oder einer dieser Banken mit anderen Zugangsdaten an.',
    'job_config_spectre_accounts_title'    => 'Import-Konten auswählen',
    'job_config_spectre_accounts_text'     => 'Sie haben „:name” (:country) gewählt. Sie haben :count Konto(s) bei diesem Anbieter. Bitte wählen Sie das/die Firefly III-Kont(o/en), auf dem/denen die Buchungen von diesen Konten gespeichert werden sollen. Denken Sie daran, dass zum Importieren von Daten sowohl das Firefly III-Konto als auch das „:name”-Konto dieselbe Währung haben müssen.',
    'spectre_no_supported_accounts'        => 'Von diesem Konto können Sie nicht importieren, da die Währungen nicht übereinstimmen.',
    'spectre_do_not_import'                => '(Nicht importieren)',
    'spectre_no_mapping'                   => 'Es scheint, dass Sie keine Konten zum Importieren ausgewählt haben.',
    'imported_from_account'                => 'Von „:account” importiert',
    'spectre_account_with_number'          => 'Konto :number',
    'job_config_spectre_apply_rules'       => 'Regeln übernehmen',
    'job_config_spectre_apply_rules_text'  => 'Standardmäßig werden Ihre Regeln auf die Buchungen angewendet, die während dieser Importfunktion erstellt wurden. Wenn Sie dies nicht wünschen, entfernen Sie die Markierung dieses Kontrollkästchens.',
    // job configuration for bunq:
    'job_config_bunq_accounts_title'       => 'bunq-Konten',
    'job_config_bunq_accounts_text'        => 'Dies sind jene Konten, die mit Ihrem „bunq”-Konto verknüpft sind. Bitte wählen Sie die Konten aus, von denen Sie importieren möchten, und in welches Konto die Buchungen importiert werden sollen.',
    'bunq_no_mapping'                      => 'Es scheint, dass Sie keine Konten ausgewählt haben.',
    'should_download_config'               => 'Sie sollten <a href=":route">die Konfigurationsdatei</a> für diesen Aufgabe herunterladen. Dies wird zukünftige Importe erheblich erleichtern.',
    'share_config_file'                    => 'Wenn Sie Daten von einer öffentlichen Bank importiert haben, sollten Sie <a href="https://github.com/firefly-iii/import-configurations/wiki"> Ihre Konfigurationsdatei freigeben</a>, damit es für andere Benutzer einfach ist, ihre Daten zu importieren. Wenn Sie Ihre Konfigurationsdatei freigeben, werden Ihre finanziellen Daten nicht preisgegeben.',
    'job_config_bunq_apply_rules'          => 'Regeln übernehmen',
    'job_config_bunq_apply_rules_text'     => 'Standardmäßig werden Ihre Regeln auf die Buchungen angewendet, die während dieser Importfunktion erstellt wurden. Wenn Sie dies nicht wünschen, entfernen Sie die Markierung dieses Kontrollkästchens.',
    // keys from "extra" array:
    'spectre_extra_key_iban'               => 'IBAN',
    'spectre_extra_key_swift'              => 'SWIFT Code',
    'spectre_extra_key_status'             => 'Status',
    'spectre_extra_key_card_type'          => 'Kartentyp',
    'spectre_extra_key_account_name'       => 'Kontoname',
    'spectre_extra_key_client_name'        => 'Client-Name',
    'spectre_extra_key_account_number'     => 'Kontonummer',
    'spectre_extra_key_blocked_amount'     => 'Gesperrter Betrag',
    'spectre_extra_key_available_amount'   => 'Verfügbarer Betrag',
    'spectre_extra_key_credit_limit'       => 'Kreditrahmen',
    'spectre_extra_key_interest_rate'      => 'Zinssatz',
    'spectre_extra_key_expiry_date'        => 'Gültig bis',
    'spectre_extra_key_open_date'          => 'Anfangsdatum',
    'spectre_extra_key_current_time'       => 'Aktuelle Uhrzeit',
    'spectre_extra_key_current_date'       => 'Aktuelles Datum',
    'spectre_extra_key_cards'              => 'Karten',
    'spectre_extra_key_units'              => 'Einheiten',
    'spectre_extra_key_unit_price'         => 'Stückpreis',
    'spectre_extra_key_transactions_count' => 'Anzahl der Buchungen',

    // specifics:
    'specific_ing_name'                    => 'ING NL',
    'specific_ing_descr'                   => 'Bessere Beschreibungen im ING-Export erstellen',
    'specific_sns_name'                    => 'SNS / Volksbank NL',
    'specific_sns_descr'                   => 'Anführungszeichen aus SNS/Volksbank-Exportdateien entfernen',
    'specific_abn_name'                    => 'ABN•AMRO NL',
    'specific_abn_descr'                   => 'Behebt mögliche Probleme mit ABN•AMRO-Dateien',
    'specific_rabo_name'                   => 'Rabobank NL',
    'specific_rabo_descr'                  => 'Behebt mögliche Probleme mit Rabobank-Dateien',
    'specific_pres_name'                   => 'President\'s Choice Financial CA',
    'specific_pres_descr'                  => 'Behebt mögliche Probleme mit PC-Dateien',
    // job configuration for file provider (stage: roles)
    'job_config_roles_title'               => 'Import einrichten (3/4) • Funktion jeder Spalte festlegen',
    'job_config_roles_text'                => 'Jede Spalte in Ihrer CSV-Datei enthält bestimmte Daten. Bitte geben Sie an, welche Art von Daten enthalten sind. Die Option "Daten zuordnen" bedeutet, dass jeder Eintrag in der Spalte mit einem Wert aus Ihrer der Datenbank ersetzt wird. Eine oft zugeordnete Spalte ist die Spalte, welche die IBAN des fremden Kontos enthält. Diese können leicht mit bereits angelegten IBANs in Ihrer Datenbank verglichen werden.',
    'job_config_roles_submit'              => 'Fortsetzen',
    'job_config_roles_column_name'         => 'Name der Spalte',
    'job_config_roles_column_example'      => 'Spaltenbeispieldaten',
    'job_config_roles_column_role'         => 'Bedeutung der Spalte',
    'job_config_roles_do_map_value'        => 'Diese Werte zuordnen',
    'job_config_roles_no_example'          => 'Keine Beispieldaten vorhanden',
    'job_config_roles_fa_warning'          => 'Wenn Sie eine Spalte als mit einem Betrag in einer Fremdwährung kennzeichnen, müssen Sie auch die Spalte mit der entsprechenden Währung festlegen.',
    'job_config_roles_rwarning'            => 'Markieren Sie mindestens die Spalte, die den jeweiligen Betrag enthält. Darüber hinaus sollten eine Spalte für die Beschreibung, das Datum und das Gegenkonto ausgewählt werden.',
    'job_config_roles_colum_count'         => 'Spalte',
    // job config for the file provider (stage: mapping):
    'job_config_map_title'                 => 'Import einrichten (4/4) - Importdaten mit Firefly III-Daten verknüpfen',
    'job_config_map_text'                  => 'In den folgenden Tabellen zeigt der linke Wert Informationen, die sich in Ihrer hochgeladenen Datei befinden. Es ist Ihre Aufgabe, diesen Wert, wenn möglich, einem bereits in der Datenbank vorhandenen zuzuordnen. Firefly wird sich an diese Zuordnung halten. Wenn kein Wert für die Zuordnung vorhanden ist oder Sie den bestimmten Wert nicht abbilden möchten, wählen Sie nichts aus.',
    'job_config_map_nothing'               => 'Ihre Datei enthält keine Daten, die bestehenden Werten zugeordnet werden können. Klicken Sie „Import starten” um fortzufahren.',
    'job_config_field_value'               => 'Feldwert',
    'job_config_field_mapped'              => 'Zugeordnet zu',
    'map_do_not_map'                       => '(keine Zuordnung)',
    'job_config_map_submit'                => 'Import starten',


    // import status page:
    'import_with_key'                      => 'Mit Schlüssel „:key” importieren',
    'status_wait_title'                    => 'Bitte warten...',
    'status_wait_text'                     => 'Diese Box wird gleich ausgeblendet.',
    'status_running_title'                 => 'Import wird ausgeführt',
    'status_job_running'                   => 'Bitte warten, Import wird ausgeführt …',
    'status_job_storing'                   => 'Bitte warten, Daten werden gespeichert …',
    'status_job_rules'                     => 'Bitte warten, Regeln werden angewendet …',
    'status_fatal_title'                   => 'Schwerwiegender Fehler',
    'status_fatal_text'                    => 'Der Import hat einen Fehler verursacht, der nicht behoben werden konnte. Entschuldigung!',
    'status_fatal_more'                    => 'Diese (möglicherweise sehr kryptische) Fehlermeldung wurde durch Protokolldateien ergänzt, die Sie auf Ihrer Festplatte oder im Docker-Container finden, von dem aus Sie Firefly III ausführen.',
    'status_finished_title'                => 'Importieren abgeschlossen',
    'status_finished_text'                 => 'Import abgeschlossen.',
    'finished_with_errors'                 => 'Beim Import gab es einige Fehler. Bitte prüfen Sie diese sorgfältig.',
    'unknown_import_result'                => 'Unbekanntes Importergebnis',
    'result_no_transactions'               => 'Es wurden keine Buchungen importiert. Vielleicht waren sie alle Duplikate, sind einfach keine Buchungen, die importiert werden könnten. Vielleicht können Ihnen die Protokolldateien sagen, was passiert ist. Wenn Sie regelmäßig Daten importieren, ist dies normal.',
    'result_one_transaction'               => 'Es wurde genau eine Buchung importiert. Diese wurde unter dem Schlagwort <a href=":route" class="label label-success" style="font-size:100%;font-weight:normal;">:tag</a> gespeichert, wo Sie diese weiter untersuchen können.',
    'result_many_transactions'             => 'Firefly III hat :count Buchungen importiert. Diese wurden unter dem Schlagwort <a href=":route" class="label label-success" style="font-size:100%;font-weight:normal;">:tag</a> gespeichert, wo Sie diese weiter untersuchen können.',


    // general errors and warnings:
    'bad_job_status'                       => 'Um auf diese Seite zuzugreifen, darf Ihr Importauftrag nicht den Status „:status” haben.',

    // column roles for CSV import:
    'column__ignore'                       => '(diese Spalte ignorieren)',
    'column_account-iban'                  => 'Bestandskonto (IBAN)',
    'column_account-id'                    => 'Kennung des Bestandkontos (passend zu FF3)',
    'column_account-name'                  => 'Bestandskonto (Name)',
    'column_account-bic'                  => 'Bestandskonto (BIC)',
    'column_amount'                        => 'Betrag',
    'column_amount_foreign'                => 'Betrag (in Fremdwährung)',
    'column_amount_debit'                  => 'Betrag (Debitoren-Spalte)',
    'column_amount_credit'                 => 'Betrag (Guthaben-Spalte)',
    'column_amount-comma-separated'        => 'Betrag (Komma als Dezimaltrennzeichen)',
    'column_bill-id'                       => 'Rechnung (ID übereinstimmend mit FF3)',
    'column_bill-name'                     => 'Rechnungsname',
    'column_budget-id'                     => 'Kostenrahmen-ID (übereinstimmend mit FF3)',
    'column_budget-name'                   => 'Kostenrahmenname',
    'column_category-id'                   => 'Kategorie (ID übereinstimmend mit FF3)',
    'column_category-name'                 => 'Name der Kategorie',
    'column_currency-code'                 => 'Währungsstandard (ISO 4217)',
    'column_foreign-currency-code'         => 'Fremdwährungscode (ISO 4217)',
    'column_currency-id'                   => 'Währung (ID übereinstimmend mit FF3)',
    'column_currency-name'                 => 'Währungsname (übereinstimmend mit FF3)',
    'column_currency-symbol'               => 'Währungssysmbol (übereinstimmend mit FF3)',
    'column_date-interest'                 => 'Datum der Zinsberechnung',
    'column_date-book'                     => 'Buchungsdatum der Überweisung',
    'column_date-process'                  => 'Verarbeitungsdatum der Überweisung',
    'column_date-transaction'              => 'Datum',
    'column_date-due'                      => 'Buchungsfälligkeit',
    'column_date-payment'                  => 'Buchungsdatum',
    'column_date-invoice'                  => 'Buchungsdatum der Rechnung',
    'column_description'                   => 'Beschreibung',
    'column_opposing-iban'                 => 'Zielkonto (IBAN)',
    'column_opposing-bic'                  => 'Zielkonto (BIC)',
    'column_opposing-id'                   => 'Zielkonto (vgl. ID in FF3)',
    'column_external-id'                   => 'Externe ID',
    'column_opposing-name'                 => 'Zielkonto (Name)',
    'column_rabo-debit-credit'             => 'Rabobank-spezifisches Belastungs- und Kreditkennzeichen',
    'column_ing-debit-credit'              => 'ING-spezifisches Belastungs- und Kreditkennzeichen',
    'column_sepa-ct-id'                    => 'SEPA • Ende-zu-Ende-Identifikationsnummer',
    'column_sepa-ct-op'                    => 'SEPA • Zielkonto-Identifikationsnummer',
    'column_sepa-db'                       => 'SEPA - Mandatskennung',
    'column_sepa-cc'                       => 'SEPA • Verrechnungsschlüssel',
    'column_sepa-ci'                       => 'SEPA • Identifikationsnummer des Zahlungsempfängers',
    'column_sepa-ep'                       => 'SEPA • Externer Verwendungszweck',
    'column_sepa-country'                  => 'SEPA • Landesschlüssel',
    'column_tags-comma'                    => 'Schlagwörter (durch Kommata getrennt)',
    'column_tags-space'                    => 'Schlagwörter (durch Leerzeichen getrennt)',
    'column_account-number'                => 'Bestandskonto (Kontonr.)',
    'column_opposing-number'               => 'Zielkonto (Kontonr.)',
    'column_note'                          => 'Notiz(en)',
    'column_internal-reference'            => 'Interne Referenz',

];
