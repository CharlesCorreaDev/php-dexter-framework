# Construtor da classe com

> **Fonte / Source:** https://www.php.net/manual/pt_BR/com.construct.php

---

# com::\_\_construct

(PHP 4 > 4.1.0, PHP 5, PHP 7, PHP 8)

com::\_\_construct — Construtor da classe com

### Descrição

public function **com::\_\_construct**(  
    [string](language.types.string.md) `$module_name`,  
    [array](language.types.array.md)|[string](language.types.string.md)|[null](language.types.null.md) `$server_name` = **`null`**,  
    [int](language.types.integer.md) `$codepage` = **`CP_ACP`**,  
    [string](language.types.string.md) `$typelib` = ""  
)

Constrói um novo objeto com.

### Parâmetros

`module_name`
:   Pode ser um ProgID, ID de classe ou Moniker que nomeia o componente a ser carregado.

    Um ProgID normalmente é o nome do aplicativo ou DLL, seguido por um ponto,
    seguido pelo nome do objeto, por exemplo: `Word.Application`.

    Um ID de classe é o UUID que identifica exclusivamente uma determinada classe.

    Um Moniker é uma forma especial de nomenclatura, semelhante em conceito a
    um esquema de URL, que identifica um recurso e especifica como ele deve ser
    carregado. Como exemplo, pode-se carregar o Word e obter um objeto
    representando um documento do Word especificando-se o caminho completo para
    o documento do Word como o nome do módulo, ou pode-se usar `LDAP:` como
    um apelido para usar a interface ADSI para o LDAP.

`server_name`
:   O nome do servidor DCOM no qual o componente deve ser carregado e
    executado. Se for **`null`**, o objeto será executado usando o padrão da
    aplicação. O padrão normalmente é executá-lo na máquina local,
    embora o administrador possa ter configurado a aplicação para ser
    iniciada em uma máquina diferente.

    Se for um valor não-**`null`**, o PHP se recusará a carregar
    o objeto, a menos que a opção [com.allow\_dcom](com.configuration.md#ini.com.allow-dcom) do php.ini
    estiver definida como **`true`**.

    Se `server_name` for um array, ele deverá conter os
    elementos listados abaixo (diferencia maiúsculas de minúsculas!). Observe que todos eles são opcionais
    (embora seja necessário especificar Username e Password juntos); se
    a configuração Server for omitida, o servidor padrão será usado (conforme
    mencionado acima) e a instanciação do objeto não será
    afetada pela diretiva [com.allow\_dcom](com.configuration.md#ini.com.allow-dcom)
    do php.ini.

    **Nome do servidor do DCOM**

    | chave | tipo | descrição |
    | --- | --- | --- |
    | Server | string | O nome do servidor. |
    | Username | string | O nome do usuário para conexão. |
    | Password | string | A senha para o `Username`. |
    | Domain | string | O domínio do `server`. |
    | Flags | integer | Uma ou mais das constantes a seguir, combinadas com a operação binária OR: **`CLSCTX_INPROC_SERVER`**, **`CLSCTX_INPROC_HANDLER`**, **`CLSCTX_LOCAL_SERVER`**, **`CLSCTX_REMOTE_SERVER`**, **`CLSCTX_SERVER`** e **`CLSCTX_ALL`**. O valor padrão se não especificado aqui é **`CLSCTX_SERVER`** se `Server` também for omitido, ou **`CLSCTX_REMOTE_SERVER`** se um servidor for especificado. A documentação da Microsoft para CoCreateInstance deve ser consultada para mais informação sobre o significado destas constantes; tipicamente não são usadas. |

`codepage`
:   Especifica a página de códigos usada para converter strings em
    Unicode e vice-versa. A conversão é aplicada sempre que uma
    string PHP é passada como parâmetro ou retornada de um método deste
    objeto COM. A página de código é fixa, o que significa que ela será
    propagada para objetos e variantes retornados do objeto.

    Valores possíveis são
    **`CP_ACP`** (usa a página de código ANSI padrão do sistema - o
    padrão se este parâmetro for omitido),
    **`CP_MACCP`**,
    **`CP_OEMCP`**, **`CP_SYMBOL`**,
    **`CP_THREAD_ACP`** (usa página de códigos e localidade definidas para a
    thread atual em execução), **`CP_UTF7`**
    e **`CP_UTF8`**. Pode-se usar também o número para uma
    determinada página de códigos; consulte a documentação da Microsoft para mais detalhes sobre
    páginas de códigos e seus valores numéricos.

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
