# Gerando hash de senhas de forma segura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/faq.passwords.php

---

# Gerando hash de senhas de forma segura

Esta seção explica as razões por trás do uso de funções de hash
para proteger senhas, bem como fazê-lo de forma eficaz.

1. [Por que deve ser feito hash das senhas fornecidas pelos usuários?](#faq.passwords.hashing)
2. [Por que as funções de hash mais comuns tais como md5 e
   sha1 são inadequadas para senhas?](#faq.passwords.fasthash)
3. [Como as senhas devem ter seus hashes gerados, se as funções de hash comuns
   não são adequadas?](#faq.passwords.bestpractice)
4. [O que é um salt?](#faq.passwords.salt)
5. [Como os salts são armazenados?](#faq.password.storing-salts)

**Por que deve ser feito hash das senhas fornecidas pelos usuários?**
:   Gerar hash de senha é uma das considerações mais básicas de segurança que
    deve ser feita ao projetar qualquer aplicação ou serviço que aceite senhas
    dos usuários. Sem gerar hash, todas as senhas que são armazenadas
    podem ser roubadas se o armazenamento de dados for comprometido, e
    então imediatamente usadas para comprometer não só a aplicação ou serviço, mas também
    as contas dos usuários em outros serviços, se eles não usarem
    senhas únicas.

    Pela aplicação de um algoritmo de hash para as senhas dos usuários antes de
    armazená-las, torna-se implausível para um atacante
    determinar a senha original, enquanto ainda é possível comparar
    o hash resultante com a senha original no futuro.

    É importante observar, entretanto, que hash de senhas só as protegem
    de serem comprometidas no armazenamento de dados, mas não necessariamente
    as protegem de serem interceptadas por código malicioso injetado na aplicação
    ou serviço em si.

**Por que as funções de hash mais comuns tais como [md5()](function.md5.md) e [sha1()](function.sha1.md) são inadequadas para senhas?**
:   Algoritmos de hash como MD5, SHA1 e SHA256 são projetados para serem
    muito rápidos e eficientes. Com técnicas e equipamentos de computação modernos,
    tornou-se trivial usar "força bruta" na saída desses algoritmos
    para determinar a entrada original.

    Por causa da rapidez com que um computador moderno pode "reverter" esses
    algoritmos de hash, muitos profissionais de segurança da informação sugerem fortemente
    que esses algoritmos não sejam utilizados para hash de senhas.

**Como as senhas devem ter seus hashes gerados, se as funções de hash comuns não são adequadas?**
:   Ao gerar hash de senhas, as duas considerações mais importantes são o
    custo do cálculo e o salt. Quanto mais custoso computacionalmente for
    o algoritmo de hash, maior será o tempo para usar força bruta na sua
    saída.

    O PHP fornece
    [uma API de hash de senha nativo](book.password.md) que
    lida de forma segura tanto [a geração de hash](function.password-hash.md)
    quanto a [verificação de senhas](function.password-verify.md)
    de forma segura.

    O algoritmo sugerido para uso na geração de hash de senhas é o Blowfish, que
    também é o padrão usado pela API de hash da senha, pois é
    significativamente mais custoso computacionalmente que o MD5 ou que o SHA1, e ainda
    assim é escalável.

    A função [crypt()](function.crypt.md) também está disponível para hash
    de senhas, mas ela só é recomendada para interoperabilidade com outros
    sistemas.
    No lugar dela, é fortemente encorajado o uso da
    [API de hash de senha nativa](book.password.md)
    sempre que possível.

**O que é um salt?**
:   Um salt de criptografia são dados que são aplicados durante o processo de hash
    para eliminar a possibilidade da saída ser pesquisada
    em uma lista de pares de hashes pré-calculados e suas entradas, conhecida como
    tabela arco-íris.

    Em termos mais simples, um salt é uma pequena adição de dados, que faz com que
    os hashes sejam significativamente mais difíceis de serem decifrados. Há uma série de
    serviços na internet que fornecem listas extensas de hashes pré-computados, bem
    como a entrada original para esses hashes. O uso de um salt faz com que seja
    improvável ou impossível encontrar o hash resultante em uma destas
    listas.

    [password\_hash()](function.password-hash.md) criará um salt aleatório se um não
    for fornecido, e esta geralmente é a abordagem mais fácil e mais
    segura.

**Como os salts são armazenados?**
:   Ao usar [password\_hash()](function.password-hash.md) ou
    [crypt()](function.crypt.md), o valor de retorno inclui o salt como parte
    do hash gerado. Este valor deve ser armazenado na íntegra no
    banco de dados, uma vez que inclui informações sobre a função de hash que foi
    usada e pode, então, ser passado diretamente às funções
    [password\_verify()](function.password-verify.md) ao verificar senhas.

    **Aviso**

    [password\_verify()](function.password-verify.md) deve sempre ser usada ao invés
    de gerar novamente o hash e comparar o resultado a um hash armazenado para
    evitar ataques de temporização.

    O diagrama a seguir mostra o formato de um valor de retorno de
    [crypt()](function.crypt.md) ou [password\_hash()](function.password-hash.md). Como pode
    ser visto, eles são auto-contidos, com todas as informações sobre
    o algoritmo e o salt necessárias para verificações futuras de senhas.

    ![
            Os componentes do valor retornado pelas funções password_hash e crypt: em
            ordem, o algoritmo escolhido, as opções do algoritmo, o salt utilizado,
            e o hash da senha.
           ](images/2a34c7f2e658f6ae74f3869f2aa5886f-crypt-text-rendered.svg)

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
