# Funções GMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.gmp.php

---

# Funções GMP

## Veja também

Mais funções matemáticas podem ser encontradas na seção
[Extensões Matemáticas](refs.math.md)

## Índice

- [gmp\_abs](function.gmp-abs.md) — Valor absoluto
- [gmp\_add](function.gmp-add.md) — Adiciona números
- [gmp\_and](function.gmp-and.md) — Operação binária AND
- [gmp\_binomial](function.gmp-binomial.md) — Calcula o coeficiente binomial
- [gmp\_clrbit](function.gmp-clrbit.md) — Limpa um bit
- [gmp\_cmp](function.gmp-cmp.md) — Compara números
- [gmp\_com](function.gmp-com.md) — Calcula o complemento de um
- [gmp\_div](function.gmp-div.md) — Sinônimo de gmp\_div\_q
- [gmp\_div\_q](function.gmp-div-q.md) — Divide números
- [gmp\_div\_qr](function.gmp-div-qr.md) — Divide números e obtém quociente e resto
- [gmp\_div\_r](function.gmp-div-r.md) — Resto da divisão de dois números
- [gmp\_divexact](function.gmp-divexact.md) — Divisão exata de números
- [gmp\_export](function.gmp-export.md) — Exporta para uma string binária
- [gmp\_fact](function.gmp-fact.md) — Fatorial
- [gmp\_gcd](function.gmp-gcd.md) — Calcula o MDC
- [gmp\_gcdext](function.gmp-gcdext.md) — Calcula MDC e multiplicadores
- [gmp\_hamdist](function.gmp-hamdist.md) — Distância de Hamming
- [gmp\_import](function.gmp-import.md) — Importa de uma string binária
- [gmp\_init](function.gmp-init.md) — Cria um número GMP
- [gmp\_intval](function.gmp-intval.md) — Converte um número GMP para um inteiro
- [gmp\_invert](function.gmp-invert.md) — Inverso modular
- [gmp\_jacobi](function.gmp-jacobi.md) — Símbolo de Jacobi
- [gmp\_kronecker](function.gmp-kronecker.md) — Símbolo de Kronecker
- [gmp\_lcm](function.gmp-lcm.md) — Calcula o MMC
- [gmp\_legendre](function.gmp-legendre.md) — Símbolo de Legendre
- [gmp\_mod](function.gmp-mod.md) — Operação Módulo
- [gmp\_mul](function.gmp-mul.md) — Multiplica números
- [gmp\_neg](function.gmp-neg.md) — Negativa o número
- [gmp\_nextprime](function.gmp-nextprime.md) — Encontra o próximo número primo
- [gmp\_or](function.gmp-or.md) — Operação binária OR
- [gmp\_perfect\_power](function.gmp-perfect-power.md) — Verificação de potência perfeita
- [gmp\_perfect\_square](function.gmp-perfect-square.md) — Verificação de quadrado perfeito
- [gmp\_popcount](function.gmp-popcount.md) — Contagem de população
- [gmp\_pow](function.gmp-pow.md) — Elevar o número a uma potência
- [gmp\_powm](function.gmp-powm.md) — Eleva um número a uma potência com módulo
- [gmp\_prob\_prime](function.gmp-prob-prime.md) — Verifica se o número é "provavelmente primo"
- [gmp\_random](function.gmp-random.md) — Número aleatório
- [gmp\_random\_bits](function.gmp-random-bits.md) — Numero aleatório
- [gmp\_random\_range](function.gmp-random-range.md) — Obtém um inteiro uniformemente selecionado
- [gmp\_random\_seed](function.gmp-random-seed.md) — Define a semente do gerador de números aleatórios
- [gmp\_root](function.gmp-root.md) — Obtém a parte inteira da raiz enésima
- [gmp\_rootrem](function.gmp-rootrem.md) — Obtém a parte inteira e o resto da raiz enésima
- [gmp\_scan0](function.gmp-scan0.md) — Procura por 0
- [gmp\_scan1](function.gmp-scan1.md) — Procura por 1
- [gmp\_setbit](function.gmp-setbit.md) — Define um bit
- [gmp\_sign](function.gmp-sign.md) — Sinal do número
- [gmp\_sqrt](function.gmp-sqrt.md) — Calcula a raiz quadrada
- [gmp\_sqrtrem](function.gmp-sqrtrem.md) — Raiz quadrada com resto
- [gmp\_strval](function.gmp-strval.md) — Converte um número GMP para uma string
- [gmp\_sub](function.gmp-sub.md) — Subtrai números
- [gmp\_testbit](function.gmp-testbit.md) — Testa se um bit está definido
- [gmp\_xor](function.gmp-xor.md) — Operação binária XOR

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
