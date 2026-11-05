# Manual de Programação Orientada a Objetos (OOP) em PHP

**Este manual consolidado reúne todo o material presente na pasta `php-dev-expert/OOP`.** Ele foi gerado a partir dos arquivos existentes (`README.md` e `RESUMO_OOP_EXPLICATIVO.md`) e organizado em seções fáceis de navegar.

---

## 📖 Visão geral

Este projeto cobre a **playlist oficial do Curso em Vídeo – Curso de POO PHP** (31 aulas, das quais 28 possuem transcrição). O conteúdo aborda desde os fundamentos da OOP até tópicos avançados de PHP 8, incluindo:

- **Fundamentos:** objetos, classes, atributos, métodos, visibilidade, métodos especiais (`__construct`, `__destruct`, `__toString`).
- **Encapsulamento:** getters/setters, interfaces, relacionamentos (associação, agregação, composição).
- **Herança:** extensão de classes, `abstract`, `final`, `parent::`.
- **Polimorfismo:** interfaces, sobrescrita, sobrecarga.
- **Projeto final:** aplicação completa usando traits, enums, readonly, atributos de atributo, e boas práticas PSR‑4.

A estrutura modular original está preservada no índice abaixo.

---

## 🗂️ Índice de módulos (origem da pasta)

| Módulo | Arquivo | Aulas cobertas | Conteúdo principal |
|---|---|---|---|
| **01** | `01-fundamentos-classes-objetos-visibilidade-metodos-especiais.md` | #01a‑#05b | Fundamentos da OOP, visibilidade, getters/setters, construct, exemplos `Caneta`, `ContaBanco` |
| **02** | `02-encapsulamento-interfaces-relacionamentos-agregacao.md` | #06a‑#09b | Encapsulamento, interfaces, relacionamentos, exercícios `Pessoa`, `Livro`, `Publicacao` |
| **03** | `03-heranca-polimorfismo-sobreposicao-sobrecarga.md` | #10a‑#13b | Herança, polimorfismo, sobreposição, sobrecarga, hierarquias `Pessoa/Aluno/Bolsista`, `Animal/Mamifero/Cachorro` |
| **04** | `04-projeto-final-completo-e-poo-moderna-php8.md` | #14a‑#15b | Projeto final completo, uso de traits, enums, readonly, PSR‑4, PHP 8.x |

---

## 📚 Mapa completo das aulas da playlist

| Aula | Título | Link | Módulo local |
|---|---|---|---|
| #01a | O que é Programação Orientada a Objetos | [YouTube](https://www.youtube.com/watch?v=KlIL63MeyMY) | `01-fundamentos…` |
| #01b | Instalando o XAMPP e o NetBeans | [YouTube](https://www.youtube.com/watch?v=5Ptu_IWFgdY) | `01-fundamentos…` |
| #02a | O que é um Objeto? | [YouTube](https://www.youtube.com/watch?v=aR7CKNFECx0) | `01-fundamentos…` |
| #02b | Criando Classes e Objetos em PHP | [YouTube](https://www.youtube.com/watch?v=djYrOHJc5Jg) | `01-fundamentos…` |
| #03a | O que é Visibilidade em um Objeto? | [YouTube](https://www.youtube.com/watch?v=jFI-qqitzwk) | `01-fundamentos…` |
| #03b | Configurando Visibilidade de Atributos e Métodos | [YouTube](https://www.youtube.com/watch?v=48NaNTtcguA) | `01-fundamentos…` |
| #04a | Métodos Especiais | [YouTube](https://www.youtube.com/watch?v=g2x9oyBFSco) | `01-fundamentos…` |
| #04b | Métodos Getter, Setter e Construtor | [YouTube](https://www.youtube.com/watch?v=0G566D5qGH8) | `01-fundamentos…` |
| #05a | Exemplo Prático com Objetos | [YouTube](https://www.youtube.com/watch?v=ull_DVFFOq0) | `01-fundamentos…` |
| #05b | Exemplo Prático em PHP | [YouTube](https://www.youtube.com/watch?v=KR9xaLwTw-E) | `01-fundamentos…` |
| #06a | Pilares da POO – Encapsulamento | [YouTube](https://www.youtube.com/watch?v=1wYRGFXpVlg) | `02-encapsulamento…` |
| #06b | Encapsulamento em PHP | [YouTube](https://www.youtube.com/watch?v=ITV8l371MZw) | `02-encapsulamento…` |
| #07a | Relacionamento entre Classes | [YouTube](https://www.youtube.com/watch?v=GLHbxDU9iBA) | `02-encapsulamento…` |
| #07b | Objetos Compostos em PHP | [YouTube](https://www.youtube.com/watch?v=__v_RNXBbTg) | `02-encapsulamento…` |
| #08a | Relacionamento de Agregação | [YouTube](https://www.youtube.com/watch?v=ERdvijGtrq0) | `02-encapsulamento…` |
| #08b | Agregação entre Objetos em PHP | [YouTube](https://www.youtube.com/watch?v=lOOYBUQSRWU) | `02-encapsulamento…` |
| #09a | Exercícios de POO | [YouTube](https://www.youtube.com/watch?v=TaqBuubOBgI) | `02-encapsulamento…` |
| #09b | Exercício Prático POO em PHP | [YouTube](https://www.youtube.com/watch?v=tIGJU26hzG4) | `02-encapsulamento…` |
| #10a | Herança – Parte 1 | [YouTube](https://www.youtube.com/watch?v=_PZldwo0vVo) | `03-heranca…` |
| #10b | Herança em PHP – Parte 1 | [YouTube](https://www.youtube.com/watch?v=8qgyXlSA1PY) | `03-herança…` |
| #11a | Herança – Parte 2 (abstract, final) | [YouTube](https://www.youtube.com/watch?v=He887D2WGVw) | `03-herança…` |
| #11b | Herança em PHP – Parte 2 | [YouTube](https://www.youtube.com/watch?v=TCzPSKI0l7U) | `03-herança…` |
| #12a | Conceito Polimorfismo – Parte 1 | [YouTube](https://www.youtube.com/watch?v=9-3-RMEMcq4) | `03-polimorfismo…` |
| #12b | Polimorfismo em PHP – Parte 1 | [YouTube](https://www.youtube.com/watch?v=rJ0MSmvsuiY) | `03-polimorfismo…` |
| #13a | Conceito Polimorfismo – Parte 2 | [YouTube](https://www.youtube.com/watch?v=hYek1xqWzgs) | `03-polimorfismo…` |
| #13b | Polimorfismo Sobrecarga – Parte 2 | [YouTube](https://www.youtube.com/watch?v=78aEA6H92r8) | `03-polimorfismo…` |
| #14a | Exercícios de POO – Parte 2 (Concurso) | [YouTube](https://www.youtube.com/watch?v=SgubvKWfHKo) | `04-projeto‑final…` |
| #14b | Projeto Final – Parte 1 (`Video` & `Gafanhoto`) | [YouTube](https://www.youtube.com/watch?v=fy0zj2wv0Wc) | `04-projeto‑final…` |
| #15a | Exercícios de POO – Parte 3 (Concurso) | [YouTube](https://www.youtube.com/watch?v=h2T5cktV79w) | `04-projeto‑final…` |
| #15b | Projeto Final – Parte 2 (`Visualizacao`) | [YouTube](https://www.youtube.com/watch?v=AfRyRBVETO8) | `04-projeto‑final…` |

> **Observação:** As aulas #14b, #15a e #15b ainda não possuem transcrição devido a bloqueio temporário do YouTube.

---

## 📚 Principais tópicos abordados
1. **Fundamentos da OOP** – objetos, classes, atributos, métodos, visibilidade, métodos mágicos.
2. **Encapsulamento** – controle de acesso, getters/setters, interfaces, composição.
3. **Relacionamento entre classes** – associação, agregação, composição.
4. **Herança** – extensão de classes, `abstract`, `final`, `parent::`.
5. **Polimorfismo** – sobrescrita, sobrecarga, interfaces.
6. **Projeto final** – aplicação prática integrando todos os conceitos, utilizando recursos modernos do PHP 8.

---

## 📎 Recursos complementares
- [PHP - Programando com Orientação a Objetos (Scribd)](https://pt.scribd.com/document/445921398/PHP-Programando-com-Orientacao-a-Objetos)
- [PHP POO (Medium)](https://medium.com/@habbema/php-p-o-o-de667031b765)
- [Object‑Oriented Programming in PHP (Zend)](https://www.zend.com/blog/object-oriented-programming-php)
- [Introdução à OOP (Coddy.tech)](https://coddy.tech/learn/pt/php/object_oriented_programming/introduction_to_oop)

---

*Este manual foi gerado automaticamente a partir dos arquivos presentes na pasta `php-dev-expert/OOP`. Qualquer ajuste futuro pode ser feito editando este documento.*

