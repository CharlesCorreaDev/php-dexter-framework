# Distribuição e empacotamento do phpMyAdmin — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/vendors.html

---

# Distribuição e empacotamento do phpMyAdmin[¶](#distributing-and-packaging-phpmyadmin "Link permanente para este título")

Este documento é feito para dar conselhos às pessoas que querem redistribuir o phpMyAdmin dentro de outros pacotes de software, como distribuições Linux ou algum pacote multifuncional que inclui servidor web e servidor MySQL.

Geralmente, você pode customizar alguns aspectos básicos (caminhos para alguns arquivos e comportamento) no arquivo `libraries/vendor_config.php`.

Por exemplo, se você quiser que o script de instalação gere um arquivo de configuração em var, altere `SETUP_CONFIG_FILE` para `/var/lib/phpmyadmin/config.inc.php` e provavelmente você também irá querer pular a verificação de permissão de escrita do diretório, para isso defina `SETUP_DIR_WRITABLE` para false.

## Bibliotecas externas[¶](#external-libraries "Link permanente para este título")

O phpMyAdmin inclui várias bibliotecas externas, você pode querer substituí-las com as de sistema se elas estiverem disponíveis, mas saiba que você deve testar se a versão que você quer fornecer é compatível com a que enviamos.

Lista de bibliotecas externas atualmente conhecidas:

js/vendor
:   jQuery js framework e várias bibliotecas js.

vendor/
:   O kit de download inclui vários pacotes Composer como dependências.

## Specific files LICENSES[¶](#specific-files-licenses "Link permanente para este título")

phpMyAdmin distributed themes contain some content that is under licenses.

- The icons of the Original and pmahomme themes are from the [Silk Icons](https://web.archive.org/web/20221201060206/http://www.famfamfam.com/lab/icons/silk/).
- Some icons of the Metro theme are from the [Silk Icons](https://web.archive.org/web/20221201060206/http://www.famfamfam.com/lab/icons/silk/).
- themes/\*/img/b\_rename.svg Is a [Icons8](https://thenounproject.com/Icons8/), icon from the [Android L Icon Pack Collection](https://thenounproject.com/Icons8/collection/android-l-icon-pack/). The icon [rename](https://thenounproject.com/term/rename/61456/).
- themes/metro/img/user.svg Is a IcoMoon the [user](https://github.com/Keyamoon/IcoMoon-Free/blob/master/SVG/114-user.svg)

CC BY 4.0 or GPL

## Licenses for vendors[¶](#licenses-for-vendors "Link permanente para este título")

- Silk Icons are under the [CC BY 2.5 or CC BY 3.0](https://web.archive.org/web/20221201060206/http://www.famfamfam.com/lab/icons/silk/) licenses.
- rename from Icons8 is under the [“public domain”](https://creativecommons.org/publicdomain/zero/1.0/) (CC0 1.0) license.
- IcoMoon Free is under [“CC BY 4.0 or GPL”](https://github.com/Keyamoon/IcoMoon-Free/blob/master/License.txt).
