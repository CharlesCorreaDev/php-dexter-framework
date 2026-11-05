# Lista de funções sinônimas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/aliases.php

---

# Lista de funções sinônimas

Existem algumas poucas funções no PHP que podem ser chamadas com mais de um
nome. Em alguns casos, não existe preferência entres os nomes,
[is\_int()](function.is-int.md) e [is\_integer()](function.is-integer.md)
são igualmente boas, por exemplo.
Entretanto existem funções que mudaram de nome para deixar a API mais limpa ou
por outras razões e os nomes antigos são apenas mantidos como sinônimos para
compatibilidade com versões anteriores. Geralmente é uma má ideia usar este
tipo de sinônimo, uma vez que eles estão obsoletos ou a ponto de serem
renomeados definitivamente, o que levará a um script não portável.
Esta lista é mantida para ajudá-los a atualizar scripts antigos para as novas sintaxes.

**Sinônimos**

| Nome da função sinônima | Nome da função canônica | Extensão usada |
| --- | --- | --- |
| \_ | [gettext()](function.gettext.md) | [Gettext](ref.gettext.md) |
| chop | [rtrim()](function.rtrim.md) | Sintaxe básica |
| close | [closedir()](function.closedir.md) | Sintaxe básica |
| com\_get | **com\_propget()** | [COM](ref.com.md) |
| com\_propset | **com\_propput()** | [COM](ref.com.md) |
| com\_set | **com\_propput()** | [COM](ref.com.md) |
| die | [exit()](function.exit.md) | [Funções miscelâneas](ref.misc.md) |
| diskfreespace | [disk\_free\_space()](function.disk-free-space.md) | [Filesystem](ref.filesystem.md) |
| doubleval | [floatval()](function.floatval.md) | Sintaxe básica |
| fputs | [fwrite()](function.fwrite.md) | Sintaxe básica |
| gzputs | [gzwrite()](function.gzwrite.md) | [Zlib](ref.zlib.md) |
| i18n\_convert | [mb\_convert\_encoding()](function.mb-convert-encoding.md) | [Multi-bytes Strings](ref.mbstring.md) |
| i18n\_discover\_encoding | [mb\_detect\_encoding()](function.mb-detect-encoding.md) | [Multi-bytes Strings](ref.mbstring.md) |
| i18n\_http\_input | [mb\_http\_input()](function.mb-http-input.md) | [Multi-bytes Strings](ref.mbstring.md) |
| i18n\_http\_output | [mb\_http\_output()](function.mb-http-output.md) | [Multi-bytes Strings](ref.mbstring.md) |
| i18n\_internal\_encoding | [mb\_internal\_encoding()](function.mb-internal-encoding.md) | [Multi-bytes Strings](ref.mbstring.md) |
| i18n\_ja\_jp\_hantozen | [mb\_convert\_kana()](function.mb-convert-kana.md) | [Multi-bytes Strings](ref.mbstring.md) |
| i18n\_mime\_header\_decode | [mb\_decode\_mimeheader()](function.mb-decode-mimeheader.md) | [Multi-bytes Strings](ref.mbstring.md) |
| i18n\_mime\_header\_encode | [mb\_encode\_mimeheader()](function.mb-encode-mimeheader.md) | [Multi-bytes Strings](ref.mbstring.md) |
| imap\_create | [imap\_createmailbox()](function.imap-createmailbox.md) | [IMAP](ref.imap.md) |
| imap\_fetchtext | [imap\_body()](function.imap-body.md) | [IMAP](ref.imap.md) |
| imap\_header | [imap\_headerinfo()](function.imap-headerinfo.md) | [IMAP](ref.imap.md) |
| imap\_listmailbox | [imap\_list()](function.imap-list.md) | [IMAP](ref.imap.md) |
| imap\_listsubscribed | [imap\_lsub()](function.imap-lsub.md) | [IMAP](ref.imap.md) |
| imap\_rename | [imap\_renamemailbox()](function.imap-renamemailbox.md) | [IMAP](ref.imap.md) |
| imap\_scan | [imap\_listscan()](function.imap-listscan.md) | [IMAP](ref.imap.md) |
| imap\_scanmailbox | [imap\_listscan()](function.imap-listscan.md) | [IMAP](ref.imap.md) |
| ini\_alter | [ini\_set()](function.ini-set.md) | Sintaxe básica |
| is\_double | [is\_float()](function.is-float.md) | Sintaxe básica |
| is\_integer | [is\_int()](function.is-int.md) | Sintaxe básica |
| is\_long | [is\_int()](function.is-int.md) | Sintaxe básica |
| is\_real | [is\_float()](function.is-float.md) | Sintaxe básica |
| is\_writeable | [is\_writable()](function.is-writable.md) | Sintaxe básica |
| join | [implode()](function.implode.md) | Sintaxe básica |
| key\_exists | [array\_key\_exists()](function.array-key-exists.md) | Sintaxe básica |
| ldap\_close | [ldap\_unbind()](function.ldap-unbind.md) | [LDAP](ref.ldap.md) |
| mbstrcut | [mb\_strcut()](function.mb-strcut.md) | [Multi-bytes Strings](ref.mbstring.md) |
| mbstrlen | [mb\_strlen()](function.mb-strlen.md) | [Multi-bytes Strings](ref.mbstring.md) |
| mbstrpos | [mb\_strpos()](function.mb-strpos.md) | [Multi-bytes Strings](ref.mbstring.md) |
| mbstrrpos | [mb\_strrpos()](function.mb-strrpos.md) | [Multi-bytes Strings](ref.mbstring.md) |
| mbsubstr | [mb\_substr()](function.mb-substr.md) | [Multi-bytes Strings](ref.mbstring.md) |
| mysql | [mysql\_db\_query()](function.mysql-db-query.md) | [MySQL](ref.mysql.md) |
| mysql\_createdb | [mysql\_create\_db()](function.mysql-create-db.md) | [MySQL](ref.mysql.md) |
| mysql\_db\_name | [mysql\_result()](function.mysql-result.md) | [MySQL](ref.mysql.md) |
| mysql\_dbname | [mysql\_result()](function.mysql-result.md) | [MySQL](ref.mysql.md) |
| mysql\_dropdb | [mysql\_drop\_db()](function.mysql-drop-db.md) | [MySQL](ref.mysql.md) |
| mysql\_fieldflags | [mysql\_field\_flags()](function.mysql-field-flags.md) | [MySQL](ref.mysql.md) |
| mysql\_fieldlen | [mysql\_field\_len()](function.mysql-field-len.md) | [MySQL](ref.mysql.md) |
| mysql\_fieldname | [mysql\_field\_name()](function.mysql-field-name.md) | [MySQL](ref.mysql.md) |
| mysql\_fieldtable | [mysql\_field\_table()](function.mysql-field-table.md) | [MySQL](ref.mysql.md) |
| mysql\_fieldtype | [mysql\_field\_type()](function.mysql-field-type.md) | [MySQL](ref.mysql.md) |
| mysql\_freeresult | [mysql\_free\_result()](function.mysql-free-result.md) | [MySQL](ref.mysql.md) |
| mysql\_listdbs | [mysql\_list\_dbs()](function.mysql-list-dbs.md) | [MySQL](ref.mysql.md) |
| mysql\_listfields | [mysql\_list\_fields()](function.mysql-list-fields.md) | [MySQL](ref.mysql.md) |
| mysql\_listtables | [mysql\_list\_tables()](function.mysql-list-tables.md) | [MySQL](ref.mysql.md) |
| mysql\_numfields | [mysql\_num\_fields()](function.mysql-num-fields.md) | [MySQL](ref.mysql.md) |
| mysql\_numrows | [mysql\_num\_rows()](function.mysql-num-rows.md) | [MySQL](ref.mysql.md) |
| mysql\_selectdb | [mysql\_select\_db()](function.mysql-select-db.md) | [MySQL](ref.mysql.md) |
| mysql\_tablename | [mysql\_result()](function.mysql-result.md) | [MySQL](ref.mysql.md) |
| ociassignelem | [OCICollection::assignElem](ocicollection.assignelem.md) | [OCI8](ref.oci8.md) |
| ocibindbyname | [oci\_bind\_by\_name()](function.oci-bind-by-name.md) | [OCI8](ref.oci8.md) |
| ocicancel | [oci\_cancel()](function.oci-cancel.md) | [OCI8](ref.oci8.md) |
| ocicloselob | [OCILob::close](ocilob.close.md) | [OCI8](ref.oci8.md) |
| ocicollappend | [OCICollection::append](ocicollection.append.md) | [OCI8](ref.oci8.md) |
| ocicollassign | [OCICollection::assign](ocicollection.assign.md) | [OCI8](ref.oci8.md) |
| ocicollmax | [OCICollection::max](ocicollection.max.md) | [OCI8](ref.oci8.md) |
| ocicollsize | [OCICollection::size](ocicollection.size.md) | [OCI8](ref.oci8.md) |
| ocicolltrim | [OCICollection::trim](ocicollection.trim.md) | [OCI8](ref.oci8.md) |
| ocicolumnisnull | [oci\_field\_is\_null()](function.oci-field-is-null.md) | [OCI8](ref.oci8.md) |
| ocicolumnname | [oci\_field\_name()](function.oci-field-name.md) | [OCI8](ref.oci8.md) |
| ocicolumnprecision | [oci\_field\_precision()](function.oci-field-precision.md) | [OCI8](ref.oci8.md) |
| ocicolumnscale | [oci\_field\_scale()](function.oci-field-scale.md) | [OCI8](ref.oci8.md) |
| ocicolumnsize | [oci\_field\_size()](function.oci-field-size.md) | [OCI8](ref.oci8.md) |
| ocicolumntype | [oci\_field\_type()](function.oci-field-type.md) | [OCI8](ref.oci8.md) |
| ocicolumntyperaw | [oci\_field\_type\_raw()](function.oci-field-type-raw.md) | [OCI8](ref.oci8.md) |
| ocicommit | [oci\_commit()](function.oci-commit.md) | [OCI8](ref.oci8.md) |
| ocidefinebyname | [oci\_define\_by\_name()](function.oci-define-by-name.md) | [OCI8](ref.oci8.md) |
| ocierror | [oci\_error()](function.oci-error.md) | [OCI8](ref.oci8.md) |
| ociexecute | [oci\_execute()](function.oci-execute.md) | [OCI8](ref.oci8.md) |
| ocifetch | [oci\_fetch()](function.oci-fetch.md) | [OCI8](ref.oci8.md) |
| ocifetchinto | [oci\_fetch\_array()](function.oci-fetch-array.md), [oci\_fetch\_row()](function.oci-fetch-row.md), [oci\_fetch\_assoc()](function.oci-fetch-assoc.md), [oci\_fetch\_object()](function.oci-fetch-object.md) | [OCI8](ref.oci8.md) |
| ocifetchstatement | [oci\_fetch\_all()](function.oci-fetch-all.md) | [OCI8](ref.oci8.md) |
| ocifreecollection | [OCICollection::free](ocicollection.free.md) | [OCI8](ref.oci8.md) |
| ocifreecursor | [oci\_free\_statement()](function.oci-free-statement.md) | [OCI8](ref.oci8.md) |
| ocifreedesc | [oci\_free\_descriptor()](function.oci-free-descriptor.md) | [OCI8](ref.oci8.md) |
| ocifreestatement | [oci\_free\_statement()](function.oci-free-statement.md) | [OCI8](ref.oci8.md) |
| ocigetelem | [OCICollection::getElem](ocicollection.getelem.md) | [OCI8](ref.oci8.md) |
| ociinternaldebug | [oci\_internal\_debug()](function.oci-internal-debug.md) | [OCI8](ref.oci8.md) |
| ociloadlob | [OCILob::load](ocilob.load.md) | [OCI8](ref.oci8.md) |
| ocilogon | [oci\_connect()](function.oci-connect.md) | [OCI8](ref.oci8.md) |
| ocinewcollection | [oci\_new\_collection()](function.oci-new-collection.md) | [OCI8](ref.oci8.md) |
| ocinewcursor | [oci\_new\_cursor()](function.oci-new-cursor.md) | [OCI8](ref.oci8.md) |
| ocinewdescriptor | [oci\_new\_descriptor()](function.oci-new-descriptor.md) | [OCI8](ref.oci8.md) |
| ocinlogon | [oci\_new\_connect()](function.oci-new-connect.md) | [OCI8](ref.oci8.md) |
| ocinumcols | [oci\_num\_fields()](function.oci-num-fields.md) | [OCI8](ref.oci8.md) |
| ociparse | [oci\_parse()](function.oci-parse.md) | [OCI8](ref.oci8.md) |
| ocipasswordchange | [oci\_password\_change()](function.oci-password-change.md) | [OCI8](ref.oci8.md) |
| ociplogon | [oci\_pconnect()](function.oci-pconnect.md) | [OCI8](ref.oci8.md) |
| ociresult | [oci\_result()](function.oci-result.md) | [OCI8](ref.oci8.md) |
| ocirollback | [oci\_rollback()](function.oci-rollback.md) | [OCI8](ref.oci8.md) |
| ocisavelob | [OCILob::save](ocilob.save.md) | [OCI8](ref.oci8.md) |
| ocisavelobfile | [OCILob::import](ocilob.import.md) | [OCI8](ref.oci8.md) |
| ociserverversion | [oci\_server\_version()](function.oci-server-version.md) | [OCI8](ref.oci8.md) |
| ocisetprefetch | [oci\_set\_prefetch()](function.oci-set-prefetch.md) | [OCI8](ref.oci8.md) |
| ocistatementtype | [oci\_statement\_type()](function.oci-statement-type.md) | [OCI8](ref.oci8.md) |
| ociwritelobtofile | [OCILob::export](ocilob.export.md) | [OCI8](ref.oci8.md) |
| ociwritetemporarylob | [OCILob::writeTemporary](ocilob.writetemporary.md) | [OCI8](ref.oci8.md) |
| odbc\_do | [odbc\_exec()](function.odbc-exec.md) | [ODBC](ref.uodbc.md) |
| odbc\_field\_precision | [odbc\_field\_len()](function.odbc-field-len.md) | [ODBC](ref.uodbc.md) |
| pg\_clientencoding | [pg\_client\_encoding()](function.pg-client-encoding.md) | [PostgreSQL](ref.pgsql.md) |
| pg\_setclientencoding | [pg\_set\_client\_encoding()](function.pg-set-client-encoding.md) | [PostgreSQL](ref.pgsql.md) |
| pg\_exec | [pg\_query()](function.pg-query.md) | [PostgreSQL](ref.pgsql.md) |
| pos | [current()](function.current.md) | Sintaxe básica |
| recode | [recode\_string()](function.recode-string.md) | [Recode](ref.recode.md) |
| show\_source | [highlight\_file()](function.highlight-file.md) | Sintaxe básica |
| sizeof | [count()](function.count.md) | Sintaxe básica |
| snmpwalkoid | [snmprealwalk()](function.snmprealwalk.md) | [SNMP](ref.snmp.md) |
| strchr | [strstr()](function.strstr.md) | Sintaxe básica |

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
