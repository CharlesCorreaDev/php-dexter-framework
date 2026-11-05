# Gera uma nova chave privada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.openssl-pkey-new.php

---

# openssl\_pkey\_new

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

openssl\_pkey\_new — Gera uma nova chave privada

### Descrição

function **openssl\_pkey\_new**([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md)|[false](language.types.singleton.md)

**openssl\_pkey\_new()** gera uma nova chave
privada.
Como obter o componente público da chave é mostrado no exemplo abaixo.

> **Nota**:
>
> É preciso ter um arquivo openssl.cnf válido instalado
> para que esta função funcione corretamente.
> Consulte as notas na [seção de
> instalação](openssl.installation.md) para obter mais informações.

### Parâmetros

`options`
:   É possível fazer ajuste fino na geração de chaves (como especificar o número de
    bits ou parâmetros) usando `options`.
    Estas opções podem ser parâmetro específicos do algoritmo usado para geração da chave
    ou opções genéricas usadas também na geração de CSR se não especificadas.
    Consulte [openssl\_csr\_new()](function.openssl-csr-new.md) para obter mais informações sobre
    como usar o parâmetro `options` para um CSR.
    Entre estas opções, somente `private_key_bits`,
    `private_key_type`, `curve_name`,
    e `config` são usadas para geração de chaves.
    Opções específicas de algoritmos são usadas se o array associativo incluir uma das chaves específicas.

    - Chave `"rsa"` para definir os parâmetros RSA.

      | Opções | Tipo | Formato | Obrigatória | Descrição |
      | --- | --- | --- | --- | --- |
      | `"n"` | [string](language.types.string.md) | número binário | sim | resto |
      | `"e"` | [string](language.types.string.md) | número binário | não | expoente público |
      | `"d"` | [string](language.types.string.md) | número binário | sim | expoente privado |
      | `"p"` | [string](language.types.string.md) | número binário | não | primo 1 |
      | `"q"` | [string](language.types.string.md) | número binário | não | primo 2 |
      | `"dmp1"` | [string](language.types.string.md) | número binário | não | expoente 1, d mod (p-1) |
      | `"dmq1"` | [string](language.types.string.md) | número binário | não | expoente 2, d mod (q-1) |
      | `"iqmp"` | [string](language.types.string.md) | número binário | não | coeficiente, (inverso de q) mod p |
    - Chave `"dsa"` para definir parâmetros DSA.

      | Opções | Tipo | Formato | Obrigatória | description |
      | --- | --- | --- | --- | --- |
      | `"p"` | [string](language.types.string.md) | número binário | não | número primo (público) |
      | `"q"` | [string](language.types.string.md) | número binário | não | subprimo de 160 bits, q | p-1 (público) |
      | `"g"` | [string](language.types.string.md) | número binário | não | gerador de subgrupo (público) |
      | `"priv_key"` | [string](language.types.string.md) | chave PEM | não | chave privada x |
      | `"pub_key"` | [string](language.types.string.md) | chave PEM | não | chave pública y = g^x |
    - Chave `"dh"` para parâmetros DH (troca de chaves Diffie–Hellman).

      | Opções | Tipo | Formato | Obrigatória | Descrição |
      | --- | --- | --- | --- | --- |
      | `"p"` | [string](language.types.string.md) | número binário | não | número primo (compartilhado) |
      | `"g"` | [string](language.types.string.md) | número binário | não | gerador de Z\_p (compartilhado) |
      | `"priv_key"` | [string](language.types.string.md) | chave PEM | não | valor x do DH privado |
      | `"pub_key"` | [string](language.types.string.md) | chave PEM | não | valor g^x do DH público |
    - Chave `"ec"` para parâmetros de curva elíptica

      | Opções | Tipo | Formato | Obrigatória | Descrição |
      | --- | --- | --- | --- | --- |
      | `"curve_name"` | [string](language.types.string.md) | Nome | não | Nome da curva, consulte [openssl\_get\_curve\_names()](function.openssl-get-curve-names.md) |
      | `"p"` | [string](language.types.string.md) | número binário | não | primo do campo para a curva sobre Fp |
      | `"a"` | [string](language.types.string.md) | número binário | não | coeficiente da curva para Fp: y^2 mod p = x^3 + ax + b mod p |
      | `"b"` | [string](language.types.string.md) | número binário | não | coeficiente da curva para Fp: y^2 mod p = x^3 + ax + b mod p |
      | `"seed"` | [string](language.types.string.md) | número binário | não | semente de número aleatório opcional usada para gerar o coeficiente b |
      | `"generator"` | [string](language.types.string.md) | ponto codificado em binário | não | ponto de geração da curva |
      | `"g_x"` | [string](language.types.string.md) | número binário | não | coordenada x do ponto de geração da curva |
      | `"g_y"` | [string](language.types.string.md) | número binário | não | coordenada y do ponto de geração da curva |
      | `"cofactor"` | [string](language.types.string.md) | número binário | não | co-fator da curva |
      | `"order"` | [string](language.types.string.md) | número binário | não | ordem da curva |
      | `"x"` | [string](language.types.string.md) | número binário | não | coordenada x (pública) |
      | `"y"` | [string](language.types.string.md) | número binário | não | coordenada y (pública) |
      | `"d"` | [string](language.types.string.md) | número binário | não | chave privada |
    - Chaves `"x25519"`, `"x448"`,
      `"ed25519"` e `"ed448"` para
      parâmetros Curve25519 e Curve448.

      | Opções | Tipo | Formato | Obrigatória | Descrição |
      | --- | --- | --- | --- | --- |
      | `"priv_key"` | [string](language.types.string.md) | chave PEM | não | chave privada |
      | `"pub_key"` | [string](language.types.string.md) | chave PEM | não | chave pública |

### Valor Retornado

Retorna uma instância de [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) para
a chave privada em caso de sucesso ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Adicionado suporte para chaves baseadas em Curve25519 e Curve448 com a instrodução dos campos `x25519`, `ed25519`, `x448` e `ed448`. |
| 8.3.0 | Adicionado suporte para geração de chaves EC com parâmetros EC customizados. Especificamente, com a introdução das opções EC: `p`, `a`, `b`, `seed`, `generator`, `g_x`, `g_y`, `cofactor` e `order`. |
| 8.0.0 | Em caso de sucesso, esta função retorna uma instância [OpenSSLAsymmetricKey](class.opensslasymmetrickey.md) agora; anteriormente, retornava um [resource](language.types.resource.md) do tipo `OpenSSL key`. |
| 7.1.0 | A chave `curve_name` do parâmetro `options` foi adicionada para tornar possível a criação de chaves EC com base nos algoritmos de Curva Elíptica. |

### Examples

**Exemplo #1 Obtendo a chave pública de uma chave privada**

```
<?php

$private_key = openssl_pkey_new();

$public_key_pem = openssl_pkey_get_details($private_key)['key'];
echo $public_key_pem, PHP_EOL;

$public_key = openssl_pkey_get_public($public_key_pem);
var_dump($public_key);

?>
```

O exemplo acima produzirá
algo semelhante a:

```
// Saída anterior ao PHP 8.0.0; observe que a função retorna um recurso
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwknBFEherZe74BiRjTFA
hqwZ1SK7brwq7C/afnLXKhRR7jnrpfM0ypC46q8xz5UZswenZakJ7kd5fls+r4Bv
3P8XsKYLTh2m1GiWQhV1g77cNIN4qNWh70PiDO3fB2446o1LBgToQYuRZS5YQRfJ
rVD0ysgtVcCU9tjaey28HlgApOpYFTaaKPj2MBmEYpMC+kG2HhL12GfpHUi2eiXI
dXT2WskWHWvUrmQ7fJIfI92JlDokV62DH/q1oiedLs9OPNb0rL1aAmYdzaVN6XNH
x/o4Lh125v2vAPV9E3fZCDc/HDEUaahpjanMiCQEgEDp5Hr+CRkvERT5/ydN+p08
5wIDAQAB
-----END PUBLIC KEY-----

resource(6) of type (OpenSSL key)

// Saída a partir do PHP 8.0.0; observe que a função retorna um objeto
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwknBFEherZe74BiRjTFA
hqwZ1SK7brwq7C/afnLXKhRR7jnrpfM0ypC46q8xz5UZswenZakJ7kd5fls+r4Bv
3P8XsKYLTh2m1GiWQhV1g77cNIN4qNWh70PiDO3fB2446o1LBgToQYuRZS5YQRfJ
rVD0ysgtVcCU9tjaey28HlgApOpYFTaaKPj2MBmEYpMC+kG2HhL12GfpHUi2eiXI
dXT2WskWHWvUrmQ7fJIfI92JlDokV62DH/q1oiedLs9OPNb0rL1aAmYdzaVN6XNH
x/o4Lh125v2vAPV9E3fZCDc/HDEUaahpjanMiCQEgEDp5Hr+CRkvERT5/ydN+p08
5wIDAQAB
-----END PUBLIC KEY-----

object(OpenSSLAsymmetricKey)#2 (0) {
}
```

**Exemplo #2 Gerando chave RSA a partir de parâmetros**

```
<?php

$nhex = "BBF82F090682CE9C2338AC2B9DA871F7368D07EED41043A440D6B6F07454F51F" .
        "B8DFBAAF035C02AB61EA48CEEB6FCD4876ED520D60E1EC4619719D8A5B8B807F" .
        "AFB8E0A3DFC737723EE6B4B7D93A2584EE6A649D060953748834B2454598394E" .
        "E0AAB12D7B61A51F527A9A41F6C1687FE2537298CA2A8F5946F8E5FD091DBDCB";

$ehex = "11";
$dhex = "A5DAFC5341FAF289C4B988DB30C1CDF83F31251E0668B42784813801579641B2" .
        "9410B3C7998D6BC465745E5C392669D6870DA2C082A939E37FDCB82EC93EDAC9" .
        "7FF3AD5950ACCFBC111C76F1A9529444E56AAF68C56C092CD38DC3BEF5D20A93" .
        "9926ED4F74A13EDDFBE1A1CECC4894AF9428C2B7B8883FE4463A4BC85B1CB3C1";

$phex = "EECFAE81B1B9B3C908810B10A1B5600199EB9F44AEF4FDA493B81A9E3D84F632" .
        "124EF0236E5D1E3B7E28FAE7AA040A2D5B252176459D1F397541BA2A58FB6599";

$qhex = "C97FB1F027F453F6341233EAAAD1D9353F6C42D08866B1D05A0F2035028B9D86" .
        "9840B41666B42E92EA0DA3B43204B5CFCE3352524D0416A5A441E700AF461503";

$dphex = "11";
$dqhex = "11";
$qinvhex = "b06c4fdabb6301198d265bdbae9423b380f271f73453885093077fcd39e2119f" .
           "c98632154f5883b167a967bf402b4e9e2e0f9656e698ea3666edfb25798039f7";

$rsa= openssl_pkey_new([
    'rsa' => [
        'n' => hex2bin($nhex),
        'e' => hex2bin($ehex),
        'd' => hex2bin($dhex),
        'p' => hex2bin($phex),
        'q' => hex2bin($qhex),
        'dmp1' => hex2bin($dphex),
        'dmq1' => hex2bin($dqhex),
        'iqmp' => hex2bin($qinvhex),
    ],
]);
$details = openssl_pkey_get_details($rsa);
var_dump($details);

?>
```

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
