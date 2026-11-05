# Lista todas as caixas de correio assinadas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.imap-getsubscribed.php

---

# imap\_getsubscribed

(PHP 4, PHP 5, PHP 7, PHP 8)

imap\_getsubscribed — Lista todas as caixas de correio assinadas

### Descrição

function **imap\_getsubscribed**([IMAP\Connection](class.imap-connection.md) `$imap`, [string](language.types.string.md) `$reference`, [string](language.types.string.md) `$pattern`): [array](language.types.array.md)|[false](language.types.singleton.md)

Obtém informações sobre as caixas de correio assinadas.

Idêntico a [imap\_getmailboxes()](function.imap-getmailboxes.md), exceto que ele apenas
retorna caixas de correio nas quais o usuário está inscrito.

### Parâmetros

`imap`
:   Uma instância de [IMAP\Connection](class.imap-connection.md).

`reference`
:   `reference` normalmente deve ser apenas a especificação do servidor
    conforme descrito em [imap\_open()](function.imap-open.md)

    **Aviso**

    Passar dados não confiáveis para este parâmetro é *inseguro*, a menos que
    [imap.enable\_insecure\_rsh](imap.configuration.md#ini.imap.enable-insecure-rsh) esteja desabilitado.

`pattern`
:   Especifica onde iniciar a pesquisa na hierarquia
    da caixa de mensagem.

    Existem dois caracteres especiais que podem
    ser passados como parte do parâmetro `pattern`:
    '`*`' e '`%`'.
    '`*`' significa retornar todas as caixas de mensagem. Se
    `pattern` for passado como '`*`', será retornada
    uma lista de toda a hierarquia da caixa de mensagem.
    '`%`'
    significa retornar apenas o nível atual.
    Passar '`%`' como o parâmetro `pattern`
    retornará apenas as caixas de mensagem do nível
    mais alto; Passar '`~/mail/%`' em `UW_IMAPD` retornará todas as caixas de mensagem no diretório ~/mail, mas não retornará nenhuma nas subpastas deste diretório.

### Valor Retornado

Retorna um array de objetos contendo informações da caixa de correio. Cada
objeto tem os atributos `name`, especificando
o nome completo da caixa de correio; `delimiter`,
que é o delimitador de hierarquia para a parte da hierarquia
em que esta caixa de correio está; e
`attributes`. `Attributes`
é uma máscara de bits que pode ser testada em relação a:

- **`LATT_NOINFERIORS`** - Esta caixa de correio não tem
  "filhas" (não há caixas de correio abaixo desta).
- **`LATT_NOSELECT`** - Isto é apenas um contêiner,
  não uma caixa de correio - não se pode abri-lo.
- **`LATT_MARKED`** - Esta caixa de correio está marcada.
  Usado somente por UW-IMAPD.
- **`LATT_UNMARKED`** - Esta caixa de correio não está marcada.
  Usada somente por UW-IMAPD.
- **`LATT_REFERRAL`** - Este contêiner tem uma referência para uma caixa de correio remota.
- **`LATT_HASCHILDREN`** - Esta caixa de correio tem filhas selecionáveis.
- **`LATT_HASNOCHILDREN`** - Esta caixa de correio não tem filhas selecionáveis.

A função retorna **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `imap` agora espera uma instância de [IMAP\Connection](class.imap-connection.md); anteriormente, um [resource](language.types.resource.md) `imap` válido era esperado. |

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
