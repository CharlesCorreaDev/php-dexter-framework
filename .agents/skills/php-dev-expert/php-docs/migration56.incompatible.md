# Alterações incompatíveis com versões anteriores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration56.incompatible.php

---

## Alterações incompatíveis com versões anteriores

Embora a maior parte do código existente de PHP 5 funcione sem alterações, devem ser
observadas algumas alterações incompatíveis com versões anteriores:

### Chaves de array não serão sobrescritas ao definir um array como uma propriedade de classe via array literal

Anteriormente, arrays declarados como propriedades de classe que misturavam chaves explícitas
e implícitas poderiam ter elementos de array silenciosamente sobrescritos se um chave
implícita fosse a mesma de uma implícita sequencial. Por exemplo:

```
<?php
class C {
    const ONE = 1;
    public $array = [
        self::ONE => 'foo',
        'bar',
        'quux',
    ];
}

var_dump((new C)->array);
?>
```

Saída do exemplo acima no PHP 5.5:

```
array(2) {
  [0]=>
  string(3) "bar"
  [1]=>
  string(4) "quux"
}
```

Saída do exemplo acima no PHP 5.6:

```
array(3) {
  [1]=>
  string(3) "foo"
  [2]=>
  string(3) "bar"
  [3]=>
  string(4) "quux"
}
```

### Rigor de [json\_decode()](function.json-decode.md)

[json\_decode()](function.json-decode.md) agora rejeita variantes
dos literais JSON `true`, `false` e
`null` que não estejam em minúsculas, conforme especificação JSON, e
define [json\_last\_error()](function.json-last-error.md) adequadamente. Anteriormente, entradas
para [json\_decode()](function.json-decode.md) que consistiam somente de um desses
valores em maiúsculas ou misturas de maiúsculas/minúsculas eram aceitas.

Esta alteração somente afetará casos onde um JSON inválido estiver sendo passado para
[json\_decode()](function.json-decode.md): entrada JSON válida não é afetada e continuará
a ser avaliada normalmente.

### Empacotadores de fluxo agora verificam certificados e nomes de servidor por padrão ao usar SSL/TLS

Todos os fluxos criptografados de cliente agora permitem a verificação de mesmo nível por padrão. Por
padrão, será usada a coleção de CAs padrão do OpenSSL para verificar o certificado
de mesmo nível. Na maioria dos casos, nenhuma alteração precisará ser feita para se comunicar
com servidores com certificados SSL válidos, pois as distribuições geralmente
configuram o OpenSSL com coleções de CAs bem conhecidos.

A coleção de CAs padrão pode ser substituída globalmente definindo
a configuração openssl.cafile ou openssl.capath, ou
por requisição usando as opções de contexto
[`cafile`](context.ssl.md#context.ssl.cafile) ou
[`capath`](context.ssl.md#context.ssl.capath).

Embora em geral não seja recomendado, é possível desabilitar a verificação
de certificado de mesmo nível para uma requisição definindo a opção de contexto
[`verify_peer`](context.ssl.md#context.ssl.verify-peer)
para **`false`** e é possível desabilitar a verificação de nome de mesmo nível definindo a opção de contexto
[`verify_peer_name`](context.ssl.md#context.ssl.verify-peer-name)
para **`false`**.

### Recursos [GMP](book.gmp.md) agora são objetos

Recursos [GMP](book.gmp.md) agora são objetos. A API
funcional implementada na extensão GMP não foi alterada, e o código
deve ser executado sem modificação a menos que ele verifique explicitamente por um recurso usando
a função [is\_resource()](function.is-resource.md) ou outra similar.

### Funções [Mcrypt](book.mcrypt.md) agora requerem chaves e IVs válidos

[mcrypt\_encrypt()](function.mcrypt-encrypt.md), [mcrypt\_decrypt()](function.mcrypt-decrypt.md),
**mcrypt\_cbc()**, **mcrypt\_cfb()**,
**mcrypt\_ecb()**, [mcrypt\_generic()](function.mcrypt-generic.md) e
**mcrypt\_ofb()** não mais aceitarão chaves ou IVs com tamanhos
incorretos e os modos de criptografia de bloco que exigem IVs
agora falharão se um IV não for fornecido.

### Envios de arquivo com [cURL](book.curl.md)

Envios de arquivo usando a sintaxe @file agora requerem que CURLOPT\_SAFE\_UPLOAD seja definido para
**`false`**. A classe [CURLFile](class.curlfile.md) deve ser usada no lugar.

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
