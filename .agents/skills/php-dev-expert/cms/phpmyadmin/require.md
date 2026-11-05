# Requisitos — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/require.html

---

# Requisitos[¶](#requirements "Link permanente para este título")

## Servidor web[¶](#web-server "Link permanente para este título")

Considerando que a interface do phpMyAdmin funciona exclusivamente no seu navegador, você precisará de um servidor web (como o Apache nginx [IIS](glossary.md#term-iis)) onde instalar os arquivos do phpMyAdmin.

## PHP[¶](#php "Link permanente para este título")

- You need PHP 8.1.2 or newer, with `session` support, the Standard PHP Library
  (SPL) extension, hash, ctype, and JSON support.
- A extensão `mbstring` (vide [mbstring](glossary.md#term-mbstring)) é fortemente recomendada por questões de performance.
- Para obter suporte a upload de arquivos ZIP, você precisa da extensão `zip` do PHP.
- Você precisa de suporte GD2 no PHP para exibir miniaturas inline de JPEGs (“image/jpeg: inline”) com sua proporção original.
- When using the cookie authentication (the default), the [openssl](https://www.php.net/openssl) extension is strongly suggested.
- Para suporte a barras de progresso de upload, veja [2.9 Vendo uma barra de progresso de upload](faq.md#faq2-9).
- To support XML and Open Document Spreadsheet importing, you need the
  [libxml](https://www.php.net/libxml) extension.
- To support reCAPTCHA on the login page, you need the
  [openssl](https://www.php.net/openssl) extension.
- To support displaying phpMyAdmin’s latest version, you need to enable
  `allow_url_open` in your `php.ini` or to have the
  [curl](https://www.php.net/curl) extension.

Ver também

[1.31 Quais versões do PHP são suportadas pelo phpMyAdmin?](faq.md#faq1-31), [Usando os modos de autenticação](setup.md#authentication-modes)

## Banco de dados[¶](#database "Link permanente para este título")

O phpMyAdmin suporta bancos de dados compatíveis com o MySQL.

- MySQL 5.5 ou mais recente
- MariaDB 5.5 ou mais recente

Ver também

[1.17 Quais versões de bancos de dados são suportadas pelo phpMyAdmin?](faq.md#faq1-17)

## Navegador Web[¶](#web-browser "Link permanente para este título")

Para acessar o phpMyAdmin, você precisa de um navegador web com cookies e JavaScript habilitado.

You need a browser which is supported by Bootstrap 4.5, see
<<https://getbootstrap.com/docs/4.5/getting-started/browsers-devices/>>.

Alterado na versão 5.2.0: You need a browser which is supported by Bootstrap 5.0, see
<<https://getbootstrap.com/docs/5.0/getting-started/browsers-devices/>>.
