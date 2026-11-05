# Abre o módulo do algoritmo e o modo a ser utilizado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mcrypt-module-open.php

---

# mcrypt\_module\_open

(PHP 4 >= 4.0.2, PHP 5, PHP 7 < 7.2.0, PECL mcrypt >= 1.0.0)

mcrypt\_module\_open — Abre o módulo do algoritmo e o modo a ser utilizado

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 7.1.0 e foi
*REMOVIDA* a partir do PHP 7.2.0. O uso desta função
é fortemente desencorajado.

### Descrição

function **mcrypt\_module\_open**(  
    [string](language.types.string.md) `$algorithm`,  
    [string](language.types.string.md) `$algorithm_directory`,  
    [string](language.types.string.md) `$mode`,  
    [string](language.types.string.md) `$mode_directory`  
): [resource](language.types.resource.md)

Esta função abre o módulo do algoritmo e o modo a ser usado.
O nome do algoritmo é especificado em "algorithm", por exemplo, `"twofish"` ou é
uma das constantes **`MCRYPT_ciphername`**. O módulo é fechado chamando
[mcrypt\_module\_close()](function.mcrypt-module-close.md).

### Parâmetros

`algorithm`
:   Uma das constantes **`MCRYPT_nome_da_cifra`** ou o nome do algoritmo como string.

`algorithm_directory`
:   O parâmetro `algorithm_directory` é usado para localizar
    o módulo de criptografia. Quando é informado um nome de diretório, ele é usado. Quando
    ele é definido como uma string vazia (`""`), o valor definido pela
    diretiva `mcrypt.algorithms_dir` do php.ini é usado. Quando
    ele não é definido, o diretório padrão usado é aquele que foi compilado
    no libmcrypt (geralmente /usr/local/lib/libmcrypt).

`mode`
:   Uma das constantes **`MCRYPT_MODE_nome_do_modo`** ou uma das seguintes strings: "ecb", "cbc", "cfb", "ofb", "nofb" ou "stream".

`mode_directory`
:   O parâmetro `mode_directory` é usado para localizar
    o módulo de criptografia. Quando é informado um nome de diretório, ele é usado. Quando
    ele é definido como uma string vazia (`""`), o valor definido pela
    diretiva `mcrypt.modes_dir` do php.ini é usado. Quando
    ele não é definido, o diretório padrão usado é aquele que foi compilado em
    no libmcrypt (geralmente /usr/local/lib/libmcrypt).

### Valor Retornado

Normalmente, ele retorna um descritor de criptografia ou **`false`** em caso de erro.

### Examples

**Exemplo #1 Exemplos de **mcrypt\_module\_open()****

```
<?php
    $td = mcrypt_module_open(MCRYPT_DES, '',
        MCRYPT_MODE_ECB, '/usr/lib/mcrypt-modes');

    $td = mcrypt_module_open('rijndael-256', '', 'ofb', '');
?>
```

A primeira linha no exemplo acima tentará abrir a cifra `DES` do
diretório padrão e o modo `ECB` do diretório
/usr/lib/mcrypt-modes. O segundo exemplo usa
strings como nome para a cifra e modo, isso só funciona quando a
extensão é compilada com o libmcrypt 2.4.x ou 2.5.x.

**Exemplo #2 Usando **mcrypt\_module\_open()** em criptografia**

```
<?php
    /* Abre a cifra */
    $td = mcrypt_module_open('rijndael-256', '', 'ofb', '');

    /* Cria o IV e determina o comprimento da chave, use MCRYPT_RAND
     * no Windows */
    $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_DEV_RANDOM);
    $ks = mcrypt_enc_get_key_size($td);

    /* Cria a chave (somente como exemplo: MD5 não é um bom algoritmo de hash para isso) */
    $key = substr(hash('md5', 'very secret key'), 0, $ks);

    /* Inicializa a criptografia */
    mcrypt_generic_init($td, $key, $iv);

    /* Criptografa os dados */
    $encrypted = mcrypt_generic($td, 'This is very important data');

    /* Desinicializa o identificador de criptografia */
    mcrypt_generic_deinit($td);

    /* Inicializa o módulo de criptografia para descriptografia */
    mcrypt_generic_init($td, $key, $iv);

    /* Descriptografa a string criptografada */
    $decrypted = mdecrypt_generic($td, $encrypted);

    /* Desinicializa o identificador de criptografia e fecha o módulo */
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);

    /* Exibe a string */
    echo trim($decrypted) . "\n";
?>
```

### Veja também

- [mcrypt\_module\_close()](function.mcrypt-module-close.md) - Fecha o módulo mcrypt
- [mcrypt\_generic()](function.mcrypt-generic.md) - Esta função criptografa dados
- [mdecrypt\_generic()](function.mdecrypt-generic.md) - Descriptografa dados
- [mcrypt\_generic\_init()](function.mcrypt-generic-init.md) - Esta função inicializa todos os buffers necessários para criptografia
- [mcrypt\_generic\_deinit()](function.mcrypt-generic-deinit.md) - Esta função desinicializa um módulo de criptografia

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
