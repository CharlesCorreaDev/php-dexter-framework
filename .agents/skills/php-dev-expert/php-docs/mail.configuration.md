# Configurações de Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mail.configuration.php

---

## Configurações de Execução

O comportamento destas funções é afetado pelas configurações do php.ini.

**Opções de configuração da função Mail**

| Nome | Padrão | Modificável | Registro de Alterações |
| --- | --- | --- | --- |
| [mail.add\_x\_header](mail.configuration.md#ini.mail.add-x-header) | "0" | **`INI_PERDIR`** |  |
| [mail.mixed\_lf\_and\_crlf](mail.configuration.md#ini.mail.mixed_lf_and_crlf) | "0" | **`INI_SYSTEM`**|**`INI_PERDIR`** | Adicionada no PHP 8.2.4 |
| [mail.log](mail.configuration.md#ini.mail.log) | NULL | **`INI_SYSTEM`**|**`INI_PERDIR`** |  |
| [mail.force\_extra\_parameters](mail.configuration.md#ini.mail.force_extra_parameters) | NULL | **`INI_SYSTEM`** |  |
| [SMTP](mail.configuration.md#ini.smtp) | "localhost" | **`INI_ALL`** |  |
| [smtp\_port](mail.configuration.md#ini.smtp-port) | "25" | **`INI_ALL`** |  |
| [sendmail\_from](mail.configuration.md#ini.sendmail-from) | NULL | **`INI_ALL`** |  |
| [sendmail\_path](mail.configuration.md#ini.sendmail-path) | "/usr/sbin/sendmail -t -i" | **`INI_SYSTEM`** |  |

Para mais detalhes e definições dos modos
INI\_\*, consulte os [Onde uma configuração deve ser definida](configuration.changes.modes.md).

Aqui está uma breve explicação das
diretivas de configuração.

`mail.add_x_header` [bool](language.types.boolean.md)
:   Adiciona `X-PHP-Originating-Script` que incluirá o UID do
    script seguido pelo nome do arquivo.

`mail.log` [string](language.types.string.md)
:   O caminho para o arquivo de registro que irá armazenar todas as chamadas à função [mail()](function.mail.md).
    As entradas de registro incluirão o caminho completo do script, número da linha,
    endereço de destino `To` e cabeçalhos.

`mail.mixed_lf_and_crlf` [bool](language.types.boolean.md)
:   Permite reverter o separador de linha para cabeçalhos de e-mail e corpos de mensagem para LF (Alimentação de Linha),
    imitando o comportamento não compatível do PHP 7. É fornecido como uma medida de compatibilidade
    para certos Agentes de Transferência de Correio Eletrônico (MTAs) não compatíveis que falham em processar corretamente CRLF
    (Retorno de Carro + Alimentação de Linha) como um separador de linha em cabeçalhos de e-mail e conteúdo de mensagem.

`mail.force_extra_parameters` [string](language.types.string.md)
:   Força a adição de parâmetros específicos que serão passados como
    parâmetros extras para o binário sendmail. Estes parâmetros sempre substituirão
    o valor do quinto parâmetro da função [mail()](function.mail.md).

    Além do comportamento padrão para **`INI_SYSTEM`**,
    este valor também pode ser definido com `php_value`
    no httpd.conf (mas isto não é recomendado).

`SMTP` [string](language.types.string.md)
:   Usado somente no Windows: nome de servidor ou endereço IP do servidor SMTP que o PHP
    deve usar para e-mail envio com a função [mail()](function.mail.md).

`smtp_port` [int](language.types.integer.md)
:   Usado somente no Windows: Número da porta para se conectar ao servidor
    definido com a configuração de `SMTP` ao enviar e-mail
    com a função [mail()](function.mail.md); a porta padrão é 25.

`sendmail_from` [string](language.types.string.md)
:   Qual endereço de e-mail `"From:"` deve ser usado no e-mail
    enviado diretamente via SNMP (somente Windows).
    Esta diretiva também define o cabeçalho `"Return-Path:"`.

`sendmail_path` [string](language.types.string.md)
:   Onde o programa **sendmail** pode ser encontrado,
    normalmente em /usr/sbin/sendmail ou
    /usr/lib/sendmail.
    **configure** faz uma tentativa de
    localizar e definir o padrão, mas se ele falhar,
    pode ser definido aqui.

    Sistema que não usam o **sendmail** devem configurar essa diretiva para a
    alternativa ao sendmail que o sistema oferece, se houver.
    Por exemplo, usuários do [» Qmail](https://cr.yp.to/qmail.html)
    normalmente usam
    /var/qmail/bin/sendmail ou 
    /var/qmail/bin/qmail-inject.

    **qmail-inject** não requer nehuma opção
    para o processar o e-mail corretamente.

    Esta diretiva também funciona no Windows. Se definida, smtp,
    smtp\_port e sendmail\_from são
    ignorados e o comando especificado é executado.

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
