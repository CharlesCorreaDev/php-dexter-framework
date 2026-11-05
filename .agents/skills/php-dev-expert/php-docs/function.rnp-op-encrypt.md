# Criptografa mensagem

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.rnp-op-encrypt.php

---

# rnp\_op\_encrypt

(PECL rnp >= 0.1.1)

rnp\_op\_encrypt — Criptografa mensagem

### Descrição

function **rnp\_op\_encrypt**(  
    [RnpFFI](class.rnpffi.md) `$ffi`,  
    [string](language.types.string.md) `$message`,  
    [array](language.types.array.md) `$recipient_keys_fp`,  
    [array](language.types.array.md) `$options` = ?  
): [string](language.types.string.md)|[false](language.types.singleton.md)

### Parâmetros

`ffi`
:   O objeto FFI retornado por [rnp\_ffi\_create()](function.rnp-ffi-create.md).

`message`
:   Mensagem a ser criptografada.

`recipient_keys_fp`
:   Array com impressões digitais das chaves do destinatário. Pelo menos uma chave deve estar presente.

`options`
:   Um array associativo com opções.

    | Chave | Tipo de dado | Descrição |
    | --- | --- | --- |
    | `"compression_alg"` | string | Algoritmo de compressão. Tanto `"compression_alg"` quanto `"compression_level"` precisam ser definidos para ativar a compactação de dados. |
    | `"compression_level"` | inteiro | Nível de compactação, 0-9. 0 desativa a compactação. |
    | `"armor"` | booleano | Habilita a saída blindada ASCII. Desativado por padrão. |
    | `"add_signature"` | booleano | A mensagem criptografada também será assinada. |
    | `"hash"` | string | Define o algoritmo hash usado durante o cálculo da assinatura. A opção "add\_signature" deve ser definida como **`true`** |
    | `"creation_time"` | inteiro | Define o horário de criação da assinatura em segundos desde 1º de janeiro de 1970 UTC. Por padrão, o horário atual é usado. |
    | `"expiration_time"` | inteiro | Define o tempo de expiração da assinatura em segundos desde o momento da criação. O valor 0 é usado para marcar a assinatura como não expirante (valor padrão). |
    | `"password"` | string | Adiciona a senha que é usada para criptografar dados. |
    | `"cipher"` | string | Define o algoritmo de criptografia simétrica. Os valores possíveis são "IDEA", "TRIPLEDES", "CAST5", "BLOWFISH", "AES128", "AES192", "AES256", "TWOFISH", "CAMELLIA128", "CAMELLIA192", "CAMELLIA256" e "SM4" . |
    | `"aead"` | string | Define o algoritmo do modo AEAD. Os valores possíveis são "None" para desabilitar AEAD, "EAX" e "OCB". |
    | `"aead_bits"` | inteiro | Define o comprimento do bloco para o modo AEAD por meio do número de bits por bloco. Deve estar entre 0 e 56. |
    | `"flags"` | inteiro | Define opções de criptografia adicionais. Opções suportadas: RNP\_ENCRYPT\_NOWRAP - não encapsula os dados em um pacote de dados literal. Isso permitiria criptografar dados já assinados. |
    | `"file_name"` | string | Define o nome do arquivo armazenado internamente para os dados que estão sendo criptografados. O valor especial \_CONSOLE pode ser usado para marcar a mensagem como 'somente para seus olhos', ou seja, ela não deve ser armazenada em qualquer lugar, mas apenas exibida para o receptor. O padrão é a string vazia. |
    | `"file_mtime"` | inteiro | Define a data de modificação do arquivo de entrada em segundos desde 1º de janeiro de 1970 UTC. |

### Valor Retornado

Dados criptografados em caso de sucesso ou **`false`** em caso de falha.

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
