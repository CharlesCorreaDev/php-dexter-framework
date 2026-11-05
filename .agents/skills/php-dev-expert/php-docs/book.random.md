# Geradores de números aleatórios e funções relacionadas à aleatoriedade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.random.php

---

# Geradores de números aleatórios e funções relacionadas à aleatoriedade

# Introdução

- [Constantes predefinidas](random.constants.md)
- [Examples](random.examples.md)
- [Funções Random](ref.random.md)
  - [getrandmax](function.getrandmax.md) — Mostrar o maior valor aleatório possível
  - [lcg\_value](function.lcg-value.md) — Gerador congruente linear combinado
  - [mt\_getrandmax](function.mt-getrandmax.md) — Mostra o maior valor aleatório possível
  - [mt\_rand](function.mt-rand.md) — Gera um valor aleatório através do Gerador de Números Aleatórios Mersenne Twister
  - [mt\_srand](function.mt-srand.md) — Semeia o Gerador de Números Aleatórios Mersenne Twister
  - [rand](function.rand.md) — Gera um número inteiro aleatório
  - [random\_bytes](function.random-bytes.md) — Obtém bytes aleatórios criptograficamente seguros
  - [random\_int](function.random-int.md) — Obtém um número inteiro selecionado uniformemente e criptograficamente seguro
  - [srand](function.srand.md) — Semeia o gerador de números aleatórios
- [Random\Randomizer](class.random-randomizer.md) — A classe Random\Randomizer
  - [Random\Randomizer::\_\_construct](random-randomizer.construct.md) — Constrói um novo Randomizer
  - [Random\Randomizer::getBytes](random-randomizer.getbytes.md) — Obtém bytes aleatórios
  - [Random\Randomizer::getBytesFromString](random-randomizer.getbytesfromstring.md) — Obtém bytes aleatórios de uma string de origem
  - [Random\Randomizer::getFloat](random-randomizer.getfloat.md) — Obtém um float selecionado uniformemente
  - [Random\Randomizer::getInt](random-randomizer.getint.md) — Obtém um inteiro selecionado uniformemente
  - [Random\Randomizer::nextFloat](random-randomizer.nextfloat.md) — Obtém um float do intervalo aberto à direita [0,0, 1,0)
  - [Random\Randomizer::nextInt](random-randomizer.nextint.md) — Obtém um inteiro positivo
  - [Random\Randomizer::pickArrayKeys](random-randomizer.pickarraykeys.md) — Seleciona chaves aleatórias de um array
  - [Random\Randomizer::\_\_serialize](random-randomizer.serialize.md) — Serializa o objeto Randomizer
  - [Random\Randomizer::shuffleArray](random-randomizer.shufflearray.md) — Obtém uma permutação de um array
  - [Random\Randomizer::shuffleBytes](random-randomizer.shufflebytes.md) — Obtém uma permutação byte a byte de uma string
  - [Random\Randomizer::\_\_unserialize](random-randomizer.unserialize.md) — Desserializa o parâmetro data em um objeto Randomizer
- [Random\IntervalBoundary](enum.random-intervalboundary.md) — A enumeração Random\IntervalBoundary
- [Random\Engine](class.random-engine.md) — A interface Random\Engine
  - [Random\Engine::generate](random-engine.generate.md) — Gera aleatoriedade
- [Random\CryptoSafeEngine](class.random-cryptosafeengine.md) — A interface Random\CryptoSafeEngine
- [Random\Engine\Secure](class.random-engine-secure.md) — A classe Random\Engine\Secure
  - [Random\Engine\Secure::generate](random-engine-secure.generate.md) — Gera aleatoriedade criptograficamente segura
- [Random\Engine\Mt19937](class.random-engine-mt19937.md) — A classe Random\Engine\Mt19937
  - [Random\Engine\Mt19937::\_\_construct](random-engine-mt19937.construct.md) — Constrói um novo mecanismo Mt19937
  - [Random\Engine\Mt19937::\_\_debugInfo](random-engine-mt19937.debuginfo.md) — Retorna o estado interno do mecanismo
  - [Random\Engine\Mt19937::generate](random-engine-mt19937.generate.md) — Gerar 32 bits de aleatoriedade
  - [Random\Engine\Mt19937::\_\_serialize](random-engine-mt19937.serialize.md) — Serializa o objeto Mt19937
  - [Random\Engine\Mt19937::\_\_unserialize](random-engine-mt19937.unserialize.md) — Desserializa o parâmetro data em um objeto Mt19937
- [Random\Engine\PcgOneseq128XslRr64](class.random-engine-pcgoneseq128xslrr64.md) — A classe Random\Engine\PcgOneseq128XslRr64
  - [Random\Engine\PcgOneseq128XslRr64::\_\_construct](random-engine-pcgoneseq128xslrr64.construct.md) — Constrói um novo mecanismo PCG Oneseq 128 XSL RR 64
  - [Random\Engine\PcgOneseq128XslRr64::\_\_debugInfo](random-engine-pcgoneseq128xslrr64.debuginfo.md) — Retorna o estado interno do mecanismo
  - [Random\Engine\PcgOneseq128XslRr64::generate](random-engine-pcgoneseq128xslrr64.generate.md) — Gera 64 bits de aleatoriedade
  - [Random\Engine\PcgOneseq128XslRr64::jump](random-engine-pcgoneseq128xslrr64.jump.md) — Move o mecanismo com eficiência para frente em várias etapas
  - [Random\Engine\PcgOneseq128XslRr64::\_\_serialize](random-engine-pcgoneseq128xslrr64.serialize.md) — Serializa o objeto PcgOneseq128XslRr64
  - [Random\Engine\PcgOneseq128XslRr64::\_\_unserialize](random-engine-pcgoneseq128xslrr64.unserialize.md) — Desserializa o parâmetro data em um objeto PcgOneseq128XslRr64
- [Random\Engine\Xoshiro256StarStar](class.random-engine-xoshiro256starstar.md) — A classe Random\Engine\Xoshiro256StarStar
  - [Random\Engine\Xoshiro256StarStar::\_\_construct](random-engine-xoshiro256starstar.construct.md) — Constrói um novo mecanismo xoshiro256\*\*
  - [Random\Engine\Xoshiro256StarStar::\_\_debugInfo](random-engine-xoshiro256starstar.debuginfo.md) — Retorna o estado interno do mecanismo
  - [Random\Engine\Xoshiro256StarStar::generate](random-engine-xoshiro256starstar.generate.md) — Gera 64 bits de aleatoriedade
  - [Random\Engine\Xoshiro256StarStar::jump](random-engine-xoshiro256starstar.jump.md) — Move o mecanismo com eficiência para frente em passos de 2^128
  - [Random\Engine\Xoshiro256StarStar::jumpLong](random-engine-xoshiro256starstar.jumplong.md) — Avança eficientemente o mecanismo em 2^192 passos
  - [Random\Engine\Xoshiro256StarStar::\_\_serialize](random-engine-xoshiro256starstar.serialize.md) — Serializa o objeto Xoshiro256StarStar
  - [Random\Engine\Xoshiro256StarStar::\_\_unserialize](random-engine-xoshiro256starstar.unserialize.md) — Desserializa o parâmetro data em um objeto Xoshiro256StarStar
- [Random\RandomError](class.random-randomerror.md) — A classe Random\RandomError
- [Random\BrokenRandomEngineError](class.random-brokenrandomengineerror.md) — A classe Random\BrokenRandomEngineError
- [Random\RandomException](class.random-randomexception.md) — A classe Random\RandomException

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
