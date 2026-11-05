# A classe SolrQuery

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrquery.php

---

# A classe SolrQuery

(PECL solr >= 0.9.2)

## Introdução

Representa uma coleção de pares nome-valor enviados ao servidor Solr durante uma solicitação.

## Resumo da classe

class **SolrQuery**

extends
[SolrModifiableParams](class.solrmodifiableparams.md)
implements
[Serializable](class.serializable.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[ORDER\_ASC](class.solrquery.md#solrquery.constants.order-asc) = 0;

const
[int](language.types.integer.md)
[ORDER\_DESC](class.solrquery.md#solrquery.constants.order-desc) = 1;

const
[int](language.types.integer.md)
[FACET\_SORT\_INDEX](class.solrquery.md#solrquery.constants.facet-sort-index) = 0;

const
[int](language.types.integer.md)
[FACET\_SORT\_COUNT](class.solrquery.md#solrquery.constants.facet-sort-count) = 1;

const
[int](language.types.integer.md)
[TERMS\_SORT\_INDEX](class.solrquery.md#solrquery.constants.terms-sort-index) = 0;

const
[int](language.types.integer.md)
[TERMS\_SORT\_COUNT](class.solrquery.md#solrquery.constants.terms-sort-count) = 1;

/\* Propriedades \*/

/\* Métodos \*/

public function [\_\_construct](solrquery.construct.md)([string](language.types.string.md) `$q` = ?)

public function [addExpandFilterQuery](solrquery.addexpandfilterquery.md)([string](language.types.string.md) `$fq`): [SolrQuery](class.solrquery.md)

public function [addExpandSortField](solrquery.addexpandsortfield.md)([string](language.types.string.md) `$field`, [string](language.types.string.md) `$order` = ?): [SolrQuery](class.solrquery.md)

public function [addFacetDateField](solrquery.addfacetdatefield.md)([string](language.types.string.md) `$dateField`): [SolrQuery](class.solrquery.md)

public function [addFacetDateOther](solrquery.addfacetdateother.md)([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [addFacetField](solrquery.addfacetfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [addFacetQuery](solrquery.addfacetquery.md)([string](language.types.string.md) `$facetQuery`): [SolrQuery](class.solrquery.md)

public function [addField](solrquery.addfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [addFilterQuery](solrquery.addfilterquery.md)([string](language.types.string.md) `$fq`): [SolrQuery](class.solrquery.md)

public function [addGroupField](solrquery.addgroupfield.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [addGroupFunction](solrquery.addgroupfunction.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [addGroupQuery](solrquery.addgroupquery.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [addGroupSortField](solrquery.addgroupsortfield.md)([string](language.types.string.md) `$field`, [int](language.types.integer.md) `$order` = ?): [SolrQuery](class.solrquery.md)

public function [addHighlightField](solrquery.addhighlightfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [addMltField](solrquery.addmltfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [addMltQueryField](solrquery.addmltqueryfield.md)([string](language.types.string.md) `$field`, [float](language.types.float.md) `$boost`): [SolrQuery](class.solrquery.md)

public function [addSortField](solrquery.addsortfield.md)([string](language.types.string.md) `$field`, [int](language.types.integer.md) `$order` = SolrQuery::ORDER\_DESC): [SolrQuery](class.solrquery.md)

public function [addStatsFacet](solrquery.addstatsfacet.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [addStatsField](solrquery.addstatsfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [collapse](solrquery.collapse.md)([SolrCollapseFunction](class.solrcollapsefunction.md) `$collapseFunction`): [SolrQuery](class.solrquery.md)

public function [getExpand](solrquery.getexpand.md)(): [bool](language.types.boolean.md)

public function [getExpandFilterQueries](solrquery.getexpandfilterqueries.md)(): [array](language.types.array.md)

public function [getExpandQuery](solrquery.getexpandquery.md)(): [array](language.types.array.md)

public function [getExpandRows](solrquery.getexpandrows.md)(): [int](language.types.integer.md)

public function [getExpandSortFields](solrquery.getexpandsortfields.md)(): [array](language.types.array.md)

public function [getFacet](solrquery.getfacet.md)(): [bool](language.types.boolean.md)

public function [getFacetDateEnd](solrquery.getfacetdateend.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getFacetDateFields](solrquery.getfacetdatefields.md)(): [array](language.types.array.md)

public function [getFacetDateGap](solrquery.getfacetdategap.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getFacetDateHardEnd](solrquery.getfacetdatehardend.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getFacetDateOther](solrquery.getfacetdateother.md)([string](language.types.string.md) `$field_override` = ?): [array](language.types.array.md)

public function [getFacetDateStart](solrquery.getfacetdatestart.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getFacetFields](solrquery.getfacetfields.md)(): [array](language.types.array.md)

public function [getFacetLimit](solrquery.getfacetlimit.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [getFacetMethod](solrquery.getfacetmethod.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getFacetMinCount](solrquery.getfacetmincount.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [getFacetMissing](solrquery.getfacetmissing.md)([string](language.types.string.md) `$field_override` = ?): [bool](language.types.boolean.md)

public function [getFacetOffset](solrquery.getfacetoffset.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [getFacetPrefix](solrquery.getfacetprefix.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getFacetQueries](solrquery.getfacetqueries.md)(): [array](language.types.array.md)

public function [getFacetSort](solrquery.getfacetsort.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [getFields](solrquery.getfields.md)(): [array](language.types.array.md)

public function [getFilterQueries](solrquery.getfilterqueries.md)(): [array](language.types.array.md)

public function [getGroup](solrquery.getgroup.md)(): [bool](language.types.boolean.md)

public function [getGroupCachePercent](solrquery.getgroupcachepercent.md)(): [int](language.types.integer.md)

public function [getGroupFacet](solrquery.getgroupfacet.md)(): [bool](language.types.boolean.md)

public function [getGroupFields](solrquery.getgroupfields.md)(): [array](language.types.array.md)

public function [getGroupFormat](solrquery.getgroupformat.md)(): [string](language.types.string.md)

public function [getGroupFunctions](solrquery.getgroupfunctions.md)(): [array](language.types.array.md)

public function [getGroupLimit](solrquery.getgrouplimit.md)(): [int](language.types.integer.md)

public function [getGroupMain](solrquery.getgroupmain.md)(): [bool](language.types.boolean.md)

public function [getGroupNGroups](solrquery.getgroupngroups.md)(): [bool](language.types.boolean.md)

public function [getGroupOffset](solrquery.getgroupoffset.md)(): [int](language.types.integer.md)

public function [getGroupQueries](solrquery.getgroupqueries.md)(): [array](language.types.array.md)

public function [getGroupSortFields](solrquery.getgroupsortfields.md)(): [array](language.types.array.md)

public function [getGroupTruncate](solrquery.getgrouptruncate.md)(): [bool](language.types.boolean.md)

public function [getHighlight](solrquery.gethighlight.md)(): [bool](language.types.boolean.md)

public function [getHighlightAlternateField](solrquery.gethighlightalternatefield.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getHighlightFields](solrquery.gethighlightfields.md)(): [array](language.types.array.md)

public function [getHighlightFormatter](solrquery.gethighlightformatter.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getHighlightFragmenter](solrquery.gethighlightfragmenter.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getHighlightFragsize](solrquery.gethighlightfragsize.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [getHighlightHighlightMultiTerm](solrquery.gethighlighthighlightmultiterm.md)(): [bool](language.types.boolean.md)

public function [getHighlightMaxAlternateFieldLength](solrquery.gethighlightmaxalternatefieldlength.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [getHighlightMaxAnalyzedChars](solrquery.gethighlightmaxanalyzedchars.md)(): [int](language.types.integer.md)

public function [getHighlightMergeContiguous](solrquery.gethighlightmergecontiguous.md)([string](language.types.string.md) `$field_override` = ?): [bool](language.types.boolean.md)

public function [getHighlightQuery](solrquery.gethighlightquery.md)(): [string](language.types.string.md)

public function [getHighlightRegexMaxAnalyzedChars](solrquery.gethighlightregexmaxanalyzedchars.md)(): [int](language.types.integer.md)

public function [getHighlightRegexPattern](solrquery.gethighlightregexpattern.md)(): [string](language.types.string.md)

public function [getHighlightRegexSlop](solrquery.gethighlightregexslop.md)(): [float](language.types.float.md)

public function [getHighlightRequireFieldMatch](solrquery.gethighlightrequirefieldmatch.md)(): [bool](language.types.boolean.md)

public function [getHighlightSimplePost](solrquery.gethighlightsimplepost.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getHighlightSimplePre](solrquery.gethighlightsimplepre.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [getHighlightSnippets](solrquery.gethighlightsnippets.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [getHighlightUsePhraseHighlighter](solrquery.gethighlightusephrasehighlighter.md)(): [bool](language.types.boolean.md)

public function [getMlt](solrquery.getmlt.md)(): [bool](language.types.boolean.md)

public function [getMltBoost](solrquery.getmltboost.md)(): [bool](language.types.boolean.md)

public function [getMltCount](solrquery.getmltcount.md)(): [int](language.types.integer.md)

public function [getMltFields](solrquery.getmltfields.md)(): [array](language.types.array.md)

public function [getMltMaxNumQueryTerms](solrquery.getmltmaxnumqueryterms.md)(): [int](language.types.integer.md)

public function [getMltMaxNumTokens](solrquery.getmltmaxnumtokens.md)(): [int](language.types.integer.md)

public function [getMltMaxWordLength](solrquery.getmltmaxwordlength.md)(): [int](language.types.integer.md)

public function [getMltMinDocFrequency](solrquery.getmltmindocfrequency.md)(): [int](language.types.integer.md)

public function [getMltMinTermFrequency](solrquery.getmltmintermfrequency.md)(): [int](language.types.integer.md)

public function [getMltMinWordLength](solrquery.getmltminwordlength.md)(): [int](language.types.integer.md)

public function [getMltQueryFields](solrquery.getmltqueryfields.md)(): [array](language.types.array.md)

public function [getQuery](solrquery.getquery.md)(): [string](language.types.string.md)

public function [getRows](solrquery.getrows.md)(): [int](language.types.integer.md)

public function [getSortFields](solrquery.getsortfields.md)(): [array](language.types.array.md)

public function [getStart](solrquery.getstart.md)(): [int](language.types.integer.md)

public function [getStats](solrquery.getstats.md)(): [bool](language.types.boolean.md)

public function [getStatsFacets](solrquery.getstatsfacets.md)(): [array](language.types.array.md)

public function [getStatsFields](solrquery.getstatsfields.md)(): [array](language.types.array.md)

public function [getTerms](solrquery.getterms.md)(): [bool](language.types.boolean.md)

public function [getTermsField](solrquery.gettermsfield.md)(): [string](language.types.string.md)

public function [getTermsIncludeLowerBound](solrquery.gettermsincludelowerbound.md)(): [bool](language.types.boolean.md)

public function [getTermsIncludeUpperBound](solrquery.gettermsincludeupperbound.md)(): [bool](language.types.boolean.md)

public function [getTermsLimit](solrquery.gettermslimit.md)(): [int](language.types.integer.md)

public function [getTermsLowerBound](solrquery.gettermslowerbound.md)(): [string](language.types.string.md)

public function [getTermsMaxCount](solrquery.gettermsmaxcount.md)(): [int](language.types.integer.md)

public function [getTermsMinCount](solrquery.gettermsmincount.md)(): [int](language.types.integer.md)

public function [getTermsPrefix](solrquery.gettermsprefix.md)(): [string](language.types.string.md)

public function [getTermsReturnRaw](solrquery.gettermsreturnraw.md)(): [bool](language.types.boolean.md)

public function [getTermsSort](solrquery.gettermssort.md)(): [int](language.types.integer.md)

public function [getTermsUpperBound](solrquery.gettermsupperbound.md)(): [string](language.types.string.md)

public function [getTimeAllowed](solrquery.gettimeallowed.md)(): [int](language.types.integer.md)

public function [removeExpandFilterQuery](solrquery.removeexpandfilterquery.md)([string](language.types.string.md) `$fq`): [SolrQuery](class.solrquery.md)

public function [removeExpandSortField](solrquery.removeexpandsortfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [removeFacetDateField](solrquery.removefacetdatefield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [removeFacetDateOther](solrquery.removefacetdateother.md)([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [removeFacetField](solrquery.removefacetfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [removeFacetQuery](solrquery.removefacetquery.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [removeField](solrquery.removefield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [removeFilterQuery](solrquery.removefilterquery.md)([string](language.types.string.md) `$fq`): [SolrQuery](class.solrquery.md)

public function [removeHighlightField](solrquery.removehighlightfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [removeMltField](solrquery.removemltfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [removeMltQueryField](solrquery.removemltqueryfield.md)([string](language.types.string.md) `$queryField`): [SolrQuery](class.solrquery.md)

public function [removeSortField](solrquery.removesortfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [removeStatsFacet](solrquery.removestatsfacet.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [removeStatsField](solrquery.removestatsfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [setEchoHandler](solrquery.setechohandler.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setEchoParams](solrquery.setechoparams.md)([string](language.types.string.md) `$type`): [SolrQuery](class.solrquery.md)

public function [setExpand](solrquery.setexpand.md)([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setExpandQuery](solrquery.setexpandquery.md)([string](language.types.string.md) `$q`): [SolrQuery](class.solrquery.md)

public function [setExpandRows](solrquery.setexpandrows.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setExplainOther](solrquery.setexplainother.md)([string](language.types.string.md) `$query`): [SolrQuery](class.solrquery.md)

public function [setFacet](solrquery.setfacet.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setFacetDateEnd](solrquery.setfacetdateend.md)([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetDateGap](solrquery.setfacetdategap.md)([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetDateHardEnd](solrquery.setfacetdatehardend.md)([bool](language.types.boolean.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetDateStart](solrquery.setfacetdatestart.md)([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetEnumCacheMinDefaultFrequency](solrquery.setfacetenumcachemindefaultfrequency.md)([int](language.types.integer.md) `$frequency`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetLimit](solrquery.setfacetlimit.md)([int](language.types.integer.md) `$limit`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetMethod](solrquery.setfacetmethod.md)([string](language.types.string.md) `$method`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetMinCount](solrquery.setfacetmincount.md)([int](language.types.integer.md) `$mincount`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetMissing](solrquery.setfacetmissing.md)([bool](language.types.boolean.md) `$flag`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetOffset](solrquery.setfacetoffset.md)([int](language.types.integer.md) `$offset`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetPrefix](solrquery.setfacetprefix.md)([string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setFacetSort](solrquery.setfacetsort.md)([int](language.types.integer.md) `$facetSort`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setGroup](solrquery.setgroup.md)([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setGroupCachePercent](solrquery.setgroupcachepercent.md)([int](language.types.integer.md) `$percent`): [SolrQuery](class.solrquery.md)

public function [setGroupFacet](solrquery.setgroupfacet.md)([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setGroupFormat](solrquery.setgroupformat.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setGroupLimit](solrquery.setgrouplimit.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setGroupMain](solrquery.setgroupmain.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setGroupNGroups](solrquery.setgroupngroups.md)([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setGroupOffset](solrquery.setgroupoffset.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setGroupTruncate](solrquery.setgrouptruncate.md)([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setHighlight](solrquery.sethighlight.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setHighlightAlternateField](solrquery.sethighlightalternatefield.md)([string](language.types.string.md) `$field`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setHighlightFormatter](solrquery.sethighlightformatter.md)([string](language.types.string.md) `$formatter`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setHighlightFragmenter](solrquery.sethighlightfragmenter.md)([string](language.types.string.md) `$fragmenter`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setHighlightFragsize](solrquery.sethighlightfragsize.md)([int](language.types.integer.md) `$size`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setHighlightHighlightMultiTerm](solrquery.sethighlighthighlightmultiterm.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setHighlightMaxAlternateFieldLength](solrquery.sethighlightmaxalternatefieldlength.md)([int](language.types.integer.md) `$fieldLength`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setHighlightMaxAnalyzedChars](solrquery.sethighlightmaxanalyzedchars.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setHighlightMergeContiguous](solrquery.sethighlightmergecontiguous.md)([bool](language.types.boolean.md) `$flag`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setHighlightQuery](solrquery.sethighlightquery.md)([string](language.types.string.md) `$q`): [SolrQuery](class.solrquery.md)

public function [setHighlightRegexMaxAnalyzedChars](solrquery.sethighlightregexmaxanalyzedchars.md)([int](language.types.integer.md) `$maxAnalyzedChars`): [SolrQuery](class.solrquery.md)

public function [setHighlightRegexPattern](solrquery.sethighlightregexpattern.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setHighlightRegexSlop](solrquery.sethighlightregexslop.md)([float](language.types.float.md) `$factor`): [SolrQuery](class.solrquery.md)

public function [setHighlightRequireFieldMatch](solrquery.sethighlightrequirefieldmatch.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setHighlightSimplePost](solrquery.sethighlightsimplepost.md)([string](language.types.string.md) `$simplePost`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setHighlightSimplePre](solrquery.sethighlightsimplepre.md)([string](language.types.string.md) `$simplePre`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setHighlightSnippets](solrquery.sethighlightsnippets.md)([int](language.types.integer.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [setHighlightUsePhraseHighlighter](solrquery.sethighlightusephrasehighlighter.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setMlt](solrquery.setmlt.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setMltBoost](solrquery.setmltboost.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setMltCount](solrquery.setmltcount.md)([int](language.types.integer.md) `$count`): [SolrQuery](class.solrquery.md)

public function [setMltMaxNumQueryTerms](solrquery.setmltmaxnumqueryterms.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setMltMaxNumTokens](solrquery.setmltmaxnumtokens.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [setMltMaxWordLength](solrquery.setmltmaxwordlength.md)([int](language.types.integer.md) `$maxWordLength`): [SolrQuery](class.solrquery.md)

public function [setMltMinDocFrequency](solrquery.setmltmindocfrequency.md)([int](language.types.integer.md) `$minDocFrequency`): [SolrQuery](class.solrquery.md)

public function [setMltMinTermFrequency](solrquery.setmltmintermfrequency.md)([int](language.types.integer.md) `$minTermFrequency`): [SolrQuery](class.solrquery.md)

public function [setMltMinWordLength](solrquery.setmltminwordlength.md)([int](language.types.integer.md) `$minWordLength`): [SolrQuery](class.solrquery.md)

public function [setOmitHeader](solrquery.setomitheader.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setQuery](solrquery.setquery.md)([string](language.types.string.md) `$query`): [SolrQuery](class.solrquery.md)

public function [setRows](solrquery.setrows.md)([int](language.types.integer.md) `$rows`): [SolrQuery](class.solrquery.md)

public function [setShowDebugInfo](solrquery.setshowdebuginfo.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setStart](solrquery.setstart.md)([int](language.types.integer.md) `$start`): [SolrQuery](class.solrquery.md)

public function [setStats](solrquery.setstats.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setTerms](solrquery.setterms.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setTermsField](solrquery.settermsfield.md)([string](language.types.string.md) `$fieldname`): [SolrQuery](class.solrquery.md)

public function [setTermsIncludeLowerBound](solrquery.settermsincludelowerbound.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setTermsIncludeUpperBound](solrquery.settermsincludeupperbound.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setTermsLimit](solrquery.settermslimit.md)([int](language.types.integer.md) `$limit`): [SolrQuery](class.solrquery.md)

public function [setTermsLowerBound](solrquery.settermslowerbound.md)([string](language.types.string.md) `$lowerBound`): [SolrQuery](class.solrquery.md)

public function [setTermsMaxCount](solrquery.settermsmaxcount.md)([int](language.types.integer.md) `$frequency`): [SolrQuery](class.solrquery.md)

public function [setTermsMinCount](solrquery.settermsmincount.md)([int](language.types.integer.md) `$frequency`): [SolrQuery](class.solrquery.md)

public function [setTermsPrefix](solrquery.settermsprefix.md)([string](language.types.string.md) `$prefix`): [SolrQuery](class.solrquery.md)

public function [setTermsReturnRaw](solrquery.settermsreturnraw.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [setTermsSort](solrquery.settermssort.md)([int](language.types.integer.md) `$sortType`): [SolrQuery](class.solrquery.md)

public function [setTermsUpperBound](solrquery.settermsupperbound.md)([string](language.types.string.md) `$upperBound`): [SolrQuery](class.solrquery.md)

public function [setTimeAllowed](solrquery.settimeallowed.md)([int](language.types.integer.md) `$timeAllowed`): [SolrQuery](class.solrquery.md)

public function [\_\_destruct](solrquery.destruct.md)()

/\* Métodos herdados \*/

public function [SolrModifiableParams::\_\_construct](solrmodifiableparams.construct.md)()

public function [SolrModifiableParams::\_\_destruct](solrmodifiableparams.destruct.md)()

}

## Constantes predefinidas

**`SolrQuery::ORDER_ASC`**
:   Usada para especificar que a classificação deve estar em ordem crescente.

**`SolrQuery::ORDER_DESC`**
:   Usada para especificar que a classificação deve estar em ordem decrescente.

**`SolrQuery::FACET_SORT_INDEX`**
:   Usada para especificar que a faceta deve ser classificada por índice.

**`SolrQuery::FACET_SORT_COUNT`**
:   Usada para especificar que a faceta deve ser classificada por contagem.

**`SolrQuery::TERMS_SORT_INDEX`**
:   Usada no TermosComponent.

**`SolrQuery::TERMS_SORT_COUNT`**
:   Usada no TermosComponent.

## Índice

- [SolrQuery::addExpandFilterQuery](solrquery.addexpandfilterquery.md) — Substitui a consulta do filtro principal e determina quais documentos incluir no grupo principal
- [SolrQuery::addExpandSortField](solrquery.addexpandsortfield.md) — Ordena os documentos dentro dos grupos expandidos (parâmetro expand.sort)
- [SolrQuery::addFacetDateField](solrquery.addfacetdatefield.md) — Mapeia para facet.date
- [SolrQuery::addFacetDateOther](solrquery.addfacetdateother.md) — Adiciona outro parâmetro facet.date.other
- [SolrQuery::addFacetField](solrquery.addfacetfield.md) — Adiciona outro campo à faceta
- [SolrQuery::addFacetQuery](solrquery.addfacetquery.md) — Adiciona uma consulta de faceta
- [SolrQuery::addField](solrquery.addfield.md) — Especifica quais campos retornar no resultado
- [SolrQuery::addFilterQuery](solrquery.addfilterquery.md) — Especifica uma consulta de filtro
- [SolrQuery::addGroupField](solrquery.addgroupfield.md) — Adiciona um campo para ser usado para agrupar resultados
- [SolrQuery::addGroupFunction](solrquery.addgroupfunction.md) — Permite agrupar resultados com base nos valores exclusivos de uma consulta de função (parâmetro group.func)
- [SolrQuery::addGroupQuery](solrquery.addgroupquery.md) — Permite agrupar documentos que correspondem à consulta fornecida
- [SolrQuery::addGroupSortField](solrquery.addgroupsortfield.md) — Adiciona um campo de classificação de grupo (parâmetro group.sort)
- [SolrQuery::addHighlightField](solrquery.addhighlightfield.md) — Mapeia para hl.fl
- [SolrQuery::addMltField](solrquery.addmltfield.md) — Define um campo a ser usado para similaridade
- [SolrQuery::addMltQueryField](solrquery.addmltqueryfield.md) — Mapeia para mlt.qf
- [SolrQuery::addSortField](solrquery.addsortfield.md) — Usado para controlar como os resultados devem ser classificados
- [SolrQuery::addStatsFacet](solrquery.addstatsfacet.md) — Solicita um retorno de subresultados para valores dentro de uma determinada faceta
- [SolrQuery::addStatsField](solrquery.addstatsfield.md) — Mapeia para o parâmetro stats.field
- [SolrQuery::collapse](solrquery.collapse.md) — Colapsa o conjunto de resultados para um único documento por grupo
- [SolrQuery::\_\_construct](solrquery.construct.md) — Construtor
- [SolrQuery::\_\_destruct](solrquery.destruct.md) — Destrutor
- [SolrQuery::getExpand](solrquery.getexpand.md) — Informa se a expansão do grupo está habilitada
- [SolrQuery::getExpandFilterQueries](solrquery.getexpandfilterqueries.md) — Retorna as consultas de filtro de expansão
- [SolrQuery::getExpandQuery](solrquery.getexpandquery.md) — Retorna o parâmetro expand.q da consulta de expansão
- [SolrQuery::getExpandRows](solrquery.getexpandrows.md) — Retorna o número de linhas a serem exibidas em cada grupo (expand.rows)
- [SolrQuery::getExpandSortFields](solrquery.getexpandsortfields.md) — Retorna um array de campos
- [SolrQuery::getFacet](solrquery.getfacet.md) — Retorna o valor do parâmetro de faceta
- [SolrQuery::getFacetDateEnd](solrquery.getfacetdateend.md) — Retorna o valor do parâmetro facet.date.end
- [SolrQuery::getFacetDateFields](solrquery.getfacetdatefields.md) — Retorna todos os campos facet.date
- [SolrQuery::getFacetDateGap](solrquery.getfacetdategap.md) — Retorna o valor do parâmetro facet.date.gap
- [SolrQuery::getFacetDateHardEnd](solrquery.getfacetdatehardend.md) — Retorna o valor do parâmetro facet.date.hardend
- [SolrQuery::getFacetDateOther](solrquery.getfacetdateother.md) — Retorna o valor do parâmetro facet.date.other
- [SolrQuery::getFacetDateStart](solrquery.getfacetdatestart.md) — Retorna o limite inferior do primeiro intervalo de datas para todas as facetas de data neste campo
- [SolrQuery::getFacetFields](solrquery.getfacetfields.md) — Retorna todos os campos de faceta
- [SolrQuery::getFacetLimit](solrquery.getfacetlimit.md) — Retorna o número máximo de contagens de restrições que devem ser retornadas para os campos de faceta
- [SolrQuery::getFacetMethod](solrquery.getfacetmethod.md) — Retorna o valor do parâmetro facet.method
- [SolrQuery::getFacetMinCount](solrquery.getfacetmincount.md) — Retorna as contagens mínimas para campos de facetas que devem ser incluídas na resposta
- [SolrQuery::getFacetMissing](solrquery.getfacetmissing.md) — Retorna o estado atual do parâmetro facet.missing
- [SolrQuery::getFacetOffset](solrquery.getfacetoffset.md) — Retorna um deslocamento na lista de restrições a serem usadas para paginação
- [SolrQuery::getFacetPrefix](solrquery.getfacetprefix.md) — Retorna o prefixo da faceta
- [SolrQuery::getFacetQueries](solrquery.getfacetqueries.md) — Retorna todas as consultas de faceta
- [SolrQuery::getFacetSort](solrquery.getfacetsort.md) — Retorna o tipo de classificação de faceta
- [SolrQuery::getFields](solrquery.getfields.md) — Retorna a lista de campos que serão retornados na resposta
- [SolrQuery::getFilterQueries](solrquery.getfilterqueries.md) — Retorna uma série de consultas de filtro
- [SolrQuery::getGroup](solrquery.getgroup.md) — Informa se o agrupamento está habilitado
- [SolrQuery::getGroupCachePercent](solrquery.getgroupcachepercent.md) — Retorna o valor percentual do cache do grupo
- [SolrQuery::getGroupFacet](solrquery.getgroupfacet.md) — Retorna o valor do parâmetro group.facet
- [SolrQuery::getGroupFields](solrquery.getgroupfields.md) — Retorna campos de grupo (valores de parâmetro group.field)
- [SolrQuery::getGroupFormat](solrquery.getgroupformat.md) — Retorna o valor group.format
- [SolrQuery::getGroupFunctions](solrquery.getgroupfunctions.md) — Retorna funções de grupo (valores de parâmetro group.func)
- [SolrQuery::getGroupLimit](solrquery.getgrouplimit.md) — Retorna o valor group.limit
- [SolrQuery::getGroupMain](solrquery.getgroupmain.md) — Retorna o valor group.main
- [SolrQuery::getGroupNGroups](solrquery.getgroupngroups.md) — Retorna o valor group.ngroups
- [SolrQuery::getGroupOffset](solrquery.getgroupoffset.md) — Retorna o valor group.offset
- [SolrQuery::getGroupQueries](solrquery.getgroupqueries.md) — Retorna todos os valores dos parâmetros group.query
- [SolrQuery::getGroupSortFields](solrquery.getgroupsortfields.md) — Retorna o valor group.sort
- [SolrQuery::getGroupTruncate](solrquery.getgrouptruncate.md) — Retorna o valor group.truncate
- [SolrQuery::getHighlight](solrquery.gethighlight.md) — Retorna o estado do parâmetro hl
- [SolrQuery::getHighlightAlternateField](solrquery.gethighlightalternatefield.md) — Retorna o campo de destaque para usar como reserva ou padrão
- [SolrQuery::getHighlightFields](solrquery.gethighlightfields.md) — Retorna todos os campos para os quais o Solr deve gerar trechos destacados
- [SolrQuery::getHighlightFormatter](solrquery.gethighlightformatter.md) — Retorna o formatador da saída destacada
- [SolrQuery::getHighlightFragmenter](solrquery.gethighlightfragmenter.md) — Retorna o gerador de trecho de texto para texto destacado
- [SolrQuery::getHighlightFragsize](solrquery.gethighlightfragsize.md) — Retorna o número de caracteres dos fragmentos a serem considerados para destaque
- [SolrQuery::getHighlightHighlightMultiTerm](solrquery.gethighlighthighlightmultiterm.md) — Retorna se o destaque deve ou não ser ativado para consultas de intervalo/coringa/difusa/prefixo
- [SolrQuery::getHighlightMaxAlternateFieldLength](solrquery.gethighlightmaxalternatefieldlength.md) — Retorna o número máximo de caracteres do campo a ser retornado
- [SolrQuery::getHighlightMaxAnalyzedChars](solrquery.gethighlightmaxanalyzedchars.md) — Retorna o número máximo de caracteres em um documento para procurar trechos adequados
- [SolrQuery::getHighlightMergeContiguous](solrquery.gethighlightmergecontiguous.md) — Retorna se os fragmentos contíguos serão ou não colapsados em um único fragmento
- [SolrQuery::getHighlightQuery](solrquery.gethighlightquery.md) — Retorna a consulta de destaque (hl.q)
- [SolrQuery::getHighlightRegexMaxAnalyzedChars](solrquery.gethighlightregexmaxanalyzedchars.md) — Retorna o número máximo de caracteres de um campo ao usar o fragmentador de expressão regular
- [SolrQuery::getHighlightRegexPattern](solrquery.gethighlightregexpattern.md) — Retorna a expressão regular para fragmentação
- [SolrQuery::getHighlightRegexSlop](solrquery.gethighlightregexslop.md) — Retorna o fator de desvio do tamanho ideal do fragmento
- [SolrQuery::getHighlightRequireFieldMatch](solrquery.gethighlightrequirefieldmatch.md) — Retorna se um campo só será destacado se a consulta corresponder a esse campo específico
- [SolrQuery::getHighlightSimplePost](solrquery.gethighlightsimplepost.md) — Retorna o texto que aparece após um termo destacado
- [SolrQuery::getHighlightSimplePre](solrquery.gethighlightsimplepre.md) — Retorna o texto que aparece antes de um termo destacado
- [SolrQuery::getHighlightSnippets](solrquery.gethighlightsnippets.md) — Retorna o número máximo de trechos destacados a serem gerados por campo
- [SolrQuery::getHighlightUsePhraseHighlighter](solrquery.gethighlightusephrasehighlighter.md) — Retorna o estado do parâmetro hl.usePhraseHighlighter
- [SolrQuery::getMlt](solrquery.getmlt.md) — Retorna se os resultados MoreLikeThis devem ou não ser habilitados
- [SolrQuery::getMltBoost](solrquery.getmltboost.md) — Retorna se a consulta será ou não impulsionada pela relevância de termo de interesse
- [SolrQuery::getMltCount](solrquery.getmltcount.md) — Retorna o número de documentos semelhantes a serem retornados para cada resultado
- [SolrQuery::getMltFields](solrquery.getmltfields.md) — Retorna todos os campos a serem usados ​​para similaridade
- [SolrQuery::getMltMaxNumQueryTerms](solrquery.getmltmaxnumqueryterms.md) — Retorna o número máximo de termos de consulta que serão incluídos em qualquer consulta gerada
- [SolrQuery::getMltMaxNumTokens](solrquery.getmltmaxnumtokens.md) — Retorna o número máximo de tokens a analisar em cada campo de documento que não é armazenado com suporte a TermVector
- [SolrQuery::getMltMaxWordLength](solrquery.getmltmaxwordlength.md) — Retorna o comprimento máximo de palavra acima do qual as palavras serão ignoradas
- [SolrQuery::getMltMinDocFrequency](solrquery.getmltmindocfrequency.md) — Retorna a frequência limite na qual as palavras serão ignoradas e que não ocorrem em pelo menos esta quantidade de documentos
- [SolrQuery::getMltMinTermFrequency](solrquery.getmltmintermfrequency.md) — Retorna a frequência abaixo da qual os termos serão ignorados no documento de origem
- [SolrQuery::getMltMinWordLength](solrquery.getmltminwordlength.md) — Retorna o comprimento mínimo da palavra abaixo do qual as palavras serão ignoradas
- [SolrQuery::getMltQueryFields](solrquery.getmltqueryfields.md) — Retorna os campos de consulta e seus impulsos
- [SolrQuery::getQuery](solrquery.getquery.md) — Retorna a consulta principal
- [SolrQuery::getRows](solrquery.getrows.md) — Retorna o número máximo de documentos
- [SolrQuery::getSortFields](solrquery.getsortfields.md) — Retorna todos os campos de classificação
- [SolrQuery::getStart](solrquery.getstart.md) — Retorna a posição no conjunto completo de resultados
- [SolrQuery::getStats](solrquery.getstats.md) — Retorna se as estatísticas estão habilitadas ou não
- [SolrQuery::getStatsFacets](solrquery.getstatsfacets.md) — Retorna todas as facetas de estatísticas que foram definidas
- [SolrQuery::getStatsFields](solrquery.getstatsfields.md) — Retorna todos os campos de estatísticas
- [SolrQuery::getTerms](solrquery.getterms.md) — Retorna se o TermsComponent está habilitado ou não
- [SolrQuery::getTermsField](solrquery.gettermsfield.md) — Retorna o campo do qual os termos são recuperados
- [SolrQuery::getTermsIncludeLowerBound](solrquery.gettermsincludelowerbound.md) — Retorna se o limite inferior no conjunto de resultados deve ou não ser incluído
- [SolrQuery::getTermsIncludeUpperBound](solrquery.gettermsincludeupperbound.md) — Retorna se o limite superior no conjunto de resultados deve ou não ser incluído
- [SolrQuery::getTermsLimit](solrquery.gettermslimit.md) — Retorna o número máximo de termos que o Solr deve retornar
- [SolrQuery::getTermsLowerBound](solrquery.gettermslowerbound.md) — Retorna o termo de início
- [SolrQuery::getTermsMaxCount](solrquery.gettermsmaxcount.md) — Retorna a frequência máxima do documento
- [SolrQuery::getTermsMinCount](solrquery.gettermsmincount.md) — Retorna a frequência mínima do documento a ser retornada para que seja incluído
- [SolrQuery::getTermsPrefix](solrquery.gettermsprefix.md) — Retorna o prefixo do termo
- [SolrQuery::getTermsReturnRaw](solrquery.gettermsreturnraw.md) — Informa se os caracteres devem ser retornados de forma bruta ou não
- [SolrQuery::getTermsSort](solrquery.gettermssort.md) — Retorna um número inteiro indicando como os termos são classificados
- [SolrQuery::getTermsUpperBound](solrquery.gettermsupperbound.md) — Retorna o termo de parada
- [SolrQuery::getTimeAllowed](solrquery.gettimeallowed.md) — Retorna o tempo em milissegundos permitido para a consulta terminar
- [SolrQuery::removeExpandFilterQuery](solrquery.removeexpandfilterquery.md) — Remove uma consulta de filtro expandido
- [SolrQuery::removeExpandSortField](solrquery.removeexpandsortfield.md) — Remove um campo de classificação expandida do parâmetro expand.sort
- [SolrQuery::removeFacetDateField](solrquery.removefacetdatefield.md) — Remove um dos campos de data de faceta
- [SolrQuery::removeFacetDateOther](solrquery.removefacetdateother.md) — Remove um dos parâmetros facet.date.other
- [SolrQuery::removeFacetField](solrquery.removefacetfield.md) — Remove um dos parâmetros facet.date
- [SolrQuery::removeFacetQuery](solrquery.removefacetquery.md) — Remove um dos parâmetros facet.query
- [SolrQuery::removeField](solrquery.removefield.md) — Remove um campo da lista de campos
- [SolrQuery::removeFilterQuery](solrquery.removefilterquery.md) — Remove uma consulta de filtro
- [SolrQuery::removeHighlightField](solrquery.removehighlightfield.md) — Remove um dos campos usados ​​para destaque
- [SolrQuery::removeMltField](solrquery.removemltfield.md) — Remove um dos campos moreLikeThis
- [SolrQuery::removeMltQueryField](solrquery.removemltqueryfield.md) — Remove um dos campos de consulta moreLikeThis
- [SolrQuery::removeSortField](solrquery.removesortfield.md) — Remove um dos campos de classificação
- [SolrQuery::removeStatsFacet](solrquery.removestatsfacet.md) — Remove um dos parâmetros stats.facet
- [SolrQuery::removeStatsField](solrquery.removestatsfield.md) — Remove um dos parâmetros stats.field
- [SolrQuery::setEchoHandler](solrquery.setechohandler.md) — Alterna o parâmetro echoHandler
- [SolrQuery::setEchoParams](solrquery.setechoparams.md) — Determina que tipo de parâmetros são incluídos na resposta
- [SolrQuery::setExpand](solrquery.setexpand.md) — Ativa/desativa o componente de expansão
- [SolrQuery::setExpandQuery](solrquery.setexpandquery.md) — Define o parâmetro expand.q
- [SolrQuery::setExpandRows](solrquery.setexpandrows.md) — Define o número de linhas a serem exibidas em cada grupo (expand.rows)
- [SolrQuery::setExplainOther](solrquery.setexplainother.md) — Define o parâmetro de consulta comum explainOther
- [SolrQuery::setFacet](solrquery.setfacet.md) — Ativa ou desativa a facetação
- [SolrQuery::setFacetDateEnd](solrquery.setfacetdateend.md) — Mapeia para facet.date.end
- [SolrQuery::setFacetDateGap](solrquery.setfacetdategap.md) — Mapeia para facet.date.gap
- [SolrQuery::setFacetDateHardEnd](solrquery.setfacetdatehardend.md) — Mapeia para facet.date.hardend
- [SolrQuery::setFacetDateStart](solrquery.setfacetdatestart.md) — Mapeia para facet.date.start
- [SolrQuery::setFacetEnumCacheMinDefaultFrequency](solrquery.setfacetenumcachemindefaultfrequency.md) — Define a frequência mínima do documento usada para determinar a contagem de prazos
- [SolrQuery::setFacetLimit](solrquery.setfacetlimit.md) — Mapeia para facet.limit
- [SolrQuery::setFacetMethod](solrquery.setfacetmethod.md) — Especifica o tipo de algoritmo a ser usado ao facetar um campo
- [SolrQuery::setFacetMinCount](solrquery.setfacetmincount.md) — Mapeia para facet.mincount
- [SolrQuery::setFacetMissing](solrquery.setfacetmissing.md) — Mapeia para facet.missing
- [SolrQuery::setFacetOffset](solrquery.setfacetoffset.md) — Define a posição na lista de restrições para permitir a paginação
- [SolrQuery::setFacetPrefix](solrquery.setfacetprefix.md) — Especifica uma string de prefixo com a qual serão limitados os termos facetados
- [SolrQuery::setFacetSort](solrquery.setfacetsort.md) — Determina a ordem das restrições do campo de faceta
- [SolrQuery::setGroup](solrquery.setgroup.md) — Ativa/desativa agrupamento de resultados (parâmetro 'group')
- [SolrQuery::setGroupCachePercent](solrquery.setgroupcachepercent.md) — Ativa o cache para agrupamento de resultados
- [SolrQuery::setGroupFacet](solrquery.setgroupfacet.md) — Define o parâmetro group.facet
- [SolrQuery::setGroupFormat](solrquery.setgroupformat.md) — Define o formato do grupo, estrutura de resultado (parâmetro group.format)
- [SolrQuery::setGroupLimit](solrquery.setgrouplimit.md) — Especifica o número de resultados a serem retornados para cada grupo
- [SolrQuery::setGroupMain](solrquery.setgroupmain.md) — Define se será usado o resultado do primeiro comando de agrupamento de campos como a lista de resultados principal na resposta
- [SolrQuery::setGroupNGroups](solrquery.setgroupngroups.md) — Define a inclusão do número de grupos que corresponderam à consulta nos resultados
- [SolrQuery::setGroupOffset](solrquery.setgroupoffset.md) — Define o parâmetro group.offset
- [SolrQuery::setGroupTruncate](solrquery.setgrouptruncate.md) — Define se as contagens de facetas são baseadas no documento mais relevante de cada grupo que corresponde à consulta
- [SolrQuery::setHighlight](solrquery.sethighlight.md) — Ativa ou desativa o destaque
- [SolrQuery::setHighlightAlternateField](solrquery.sethighlightalternatefield.md) — Especifica o campo reserva a ser usado
- [SolrQuery::setHighlightFormatter](solrquery.sethighlightformatter.md) — Especifica um formatador para a saída de destaque
- [SolrQuery::setHighlightFragmenter](solrquery.sethighlightfragmenter.md) — Define um gerador de trecho de texto para texto destacado
- [SolrQuery::setHighlightFragsize](solrquery.sethighlightfragsize.md) — O tamanho dos fragmentos a serem considerados para destaque
- [SolrQuery::setHighlightHighlightMultiTerm](solrquery.sethighlighthighlightmultiterm.md) — Usa o SpanScorer para destacar termos de frases
- [SolrQuery::setHighlightMaxAlternateFieldLength](solrquery.sethighlightmaxalternatefieldlength.md) — Define o número máximo de caracteres do campo a retornar
- [SolrQuery::setHighlightMaxAnalyzedChars](solrquery.sethighlightmaxanalyzedchars.md) — Especifica o número de caracteres em um documento para procurar trechos adequados
- [SolrQuery::setHighlightMergeContiguous](solrquery.sethighlightmergecontiguous.md) — Informa se fragmentos contíguos devem ou não ser colapsados em um único fragmento
- [SolrQuery::setHighlightQuery](solrquery.sethighlightquery.md) — Designa uma consulta para destaque (hl.q)
- [SolrQuery::setHighlightRegexMaxAnalyzedChars](solrquery.sethighlightregexmaxanalyzedchars.md) — Especifica o número máximo de caracteres a serem analisados
- [SolrQuery::setHighlightRegexPattern](solrquery.sethighlightregexpattern.md) — Especifica a expressão regular para fragmentação
- [SolrQuery::setHighlightRegexSlop](solrquery.sethighlightregexslop.md) — Define o fator pelo qual o fragmentador de expressão regular pode se desviar do tamanho ideal do fragmento
- [SolrQuery::setHighlightRequireFieldMatch](solrquery.sethighlightrequirefieldmatch.md) — Requer correspondência de campo durante o destaque
- [SolrQuery::setHighlightSimplePost](solrquery.sethighlightsimplepost.md) — Define o texto que aparece após um termo destacado
- [SolrQuery::setHighlightSimplePre](solrquery.sethighlightsimplepre.md) — Define o texto que aparece antes de um termo destacado
- [SolrQuery::setHighlightSnippets](solrquery.sethighlightsnippets.md) — Define o número máximo de trechos destacados a serem gerados por campo
- [SolrQuery::setHighlightUsePhraseHighlighter](solrquery.sethighlightusephrasehighlighter.md) — Define se os termos da frase devem ser destacados apenas quando eles aparecem na frase de consulta
- [SolrQuery::setMlt](solrquery.setmlt.md) — Ativa ou desativa moreLikeThis
- [SolrQuery::setMltBoost](solrquery.setmltboost.md) — Define se a consulta será impulsionada pela relevância de termos de interesse
- [SolrQuery::setMltCount](solrquery.setmltcount.md) — Define o número de documentos semelhantes a serem retornados para cada resultado
- [SolrQuery::setMltMaxNumQueryTerms](solrquery.setmltmaxnumqueryterms.md) — Define o número máximo de termos de consulta incluídos
- [SolrQuery::setMltMaxNumTokens](solrquery.setmltmaxnumtokens.md) — Especifica o número máximo de tokens a serem analisados
- [SolrQuery::setMltMaxWordLength](solrquery.setmltmaxwordlength.md) — Define o comprimento máximo da palavra
- [SolrQuery::setMltMinDocFrequency](solrquery.setmltmindocfrequency.md) — Define a frequência mltMinDoc
- [SolrQuery::setMltMinTermFrequency](solrquery.setmltmintermfrequency.md) — Define a frequência abaixo da qual os termos serão ignorados nos documentos de origem
- [SolrQuery::setMltMinWordLength](solrquery.setmltminwordlength.md) — Define o comprimento mínimo da palavra
- [SolrQuery::setOmitHeader](solrquery.setomitheader.md) — Exclui o cabeçalho dos resultados retornados
- [SolrQuery::setQuery](solrquery.setquery.md) — Define a consulta de pesquisa
- [SolrQuery::setRows](solrquery.setrows.md) — Especifica o número máximo de linhas a serem retornadas no resultado
- [SolrQuery::setShowDebugInfo](solrquery.setshowdebuginfo.md) — Define sinalizador para mostrar informações de depuração
- [SolrQuery::setStart](solrquery.setstart.md) — Especifica o número de linhas a serem ignoradas
- [SolrQuery::setStats](solrquery.setstats.md) — Ativa ou desativa o componente de estatísticas
- [SolrQuery::setTerms](solrquery.setterms.md) — Habilita ou desabilita o TermsComponent
- [SolrQuery::setTermsField](solrquery.settermsfield.md) — Define o nome do campo do qual os termos serão obtidos
- [SolrQuery::setTermsIncludeLowerBound](solrquery.settermsincludelowerbound.md) — Inclui o termo do limite inferior no conjunto de resultados
- [SolrQuery::setTermsIncludeUpperBound](solrquery.settermsincludeupperbound.md) — Inclui o termo do limite superior no conjunto de resultados
- [SolrQuery::setTermsLimit](solrquery.settermslimit.md) — Define o número máximo de termos a serem retornados
- [SolrQuery::setTermsLowerBound](solrquery.settermslowerbound.md) — Especifica o termo de início
- [SolrQuery::setTermsMaxCount](solrquery.settermsmaxcount.md) — Define a frequência máxima do documento
- [SolrQuery::setTermsMinCount](solrquery.settermsmincount.md) — Define a frequência mínima do documento
- [SolrQuery::setTermsPrefix](solrquery.settermsprefix.md) — Restringe correspondências a termos que começam com o prefixo
- [SolrQuery::setTermsReturnRaw](solrquery.settermsreturnraw.md) — Retorna os caracteres brutos do termo indexado
- [SolrQuery::setTermsSort](solrquery.settermssort.md) — Especifica como classificar os termos retornados
- [SolrQuery::setTermsUpperBound](solrquery.settermsupperbound.md) — Define o termo de parada
- [SolrQuery::setTimeAllowed](solrquery.settimeallowed.md) — Define o tempo permitido para a pesquisa terminar

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
