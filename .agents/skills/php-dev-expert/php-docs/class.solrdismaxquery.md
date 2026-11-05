# A classe SolrDisMaxQuery

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.solrdismaxquery.php

---

# A classe SolrDisMaxQuery

(No version information available, might only be in Git)

## Introdução

## Resumo da classe

class **SolrDisMaxQuery**

extends
[SolrQuery](class.solrquery.md)
implements
[Serializable](class.serializable.md) {

/\* Propriedades herdadas \*/

const
[int](language.types.integer.md)
[SolrQuery::ORDER\_ASC](class.solrquery.md#solrquery.constants.order-asc) = 0;

const
[int](language.types.integer.md)
[SolrQuery::ORDER\_DESC](class.solrquery.md#solrquery.constants.order-desc) = 1;

const
[int](language.types.integer.md)
[SolrQuery::FACET\_SORT\_INDEX](class.solrquery.md#solrquery.constants.facet-sort-index) = 0;

const
[int](language.types.integer.md)
[SolrQuery::FACET\_SORT\_COUNT](class.solrquery.md#solrquery.constants.facet-sort-count) = 1;

const
[int](language.types.integer.md)
[SolrQuery::TERMS\_SORT\_INDEX](class.solrquery.md#solrquery.constants.terms-sort-index) = 0;

const
[int](language.types.integer.md)
[SolrQuery::TERMS\_SORT\_COUNT](class.solrquery.md#solrquery.constants.terms-sort-count) = 1;

/\* Métodos \*/

public function [\_\_construct](solrdismaxquery.construct.md)([string](language.types.string.md) `$q` = ?)

public function [addBigramPhraseField](solrdismaxquery.addbigramphrasefield.md)([string](language.types.string.md) `$field`, [string](language.types.string.md) `$boost`, [string](language.types.string.md) `$slop` = ?): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [addBoostQuery](solrdismaxquery.addboostquery.md)([string](language.types.string.md) `$field`, [string](language.types.string.md) `$value`, [string](language.types.string.md) `$boost` = ?): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [addPhraseField](solrdismaxquery.addphrasefield.md)([string](language.types.string.md) `$field`, [string](language.types.string.md) `$boost`, [string](language.types.string.md) `$slop` = ?): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [addQueryField](solrdismaxquery.addqueryfield.md)([string](language.types.string.md) `$field`, [string](language.types.string.md) `$boost` = ?): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [addTrigramPhraseField](solrdismaxquery.addtrigramphrasefield.md)([string](language.types.string.md) `$field`, [string](language.types.string.md) `$boost`, [string](language.types.string.md) `$slop` = ?): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [addUserField](solrdismaxquery.adduserfield.md)([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [removeBigramPhraseField](solrdismaxquery.removebigramphrasefield.md)([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [removeBoostQuery](solrdismaxquery.removeboostquery.md)([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [removePhraseField](solrdismaxquery.removephrasefield.md)([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [removeQueryField](solrdismaxquery.removequeryfield.md)([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [removeTrigramPhraseField](solrdismaxquery.removetrigramphrasefield.md)([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [removeUserField](solrdismaxquery.removeuserfield.md)([string](language.types.string.md) `$field`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setBigramPhraseFields](solrdismaxquery.setbigramphrasefields.md)([string](language.types.string.md) `$fields`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setBigramPhraseSlop](solrdismaxquery.setbigramphraseslop.md)([string](language.types.string.md) `$slop`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setBoostFunction](solrdismaxquery.setboostfunction.md)([string](language.types.string.md) `$function`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setBoostQuery](solrdismaxquery.setboostquery.md)([string](language.types.string.md) `$q`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setMinimumMatch](solrdismaxquery.setminimummatch.md)([string](language.types.string.md) `$value`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setPhraseFields](solrdismaxquery.setphrasefields.md)([string](language.types.string.md) `$fields`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setPhraseSlop](solrdismaxquery.setphraseslop.md)([string](language.types.string.md) `$slop`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setQueryAlt](solrdismaxquery.setqueryalt.md)([string](language.types.string.md) `$q`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setQueryPhraseSlop](solrdismaxquery.setqueryphraseslop.md)([string](language.types.string.md) `$slop`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setTieBreaker](solrdismaxquery.settiebreaker.md)([string](language.types.string.md) `$tieBreaker`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setTrigramPhraseFields](solrdismaxquery.settrigramphrasefields.md)([string](language.types.string.md) `$fields`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setTrigramPhraseSlop](solrdismaxquery.settrigramphraseslop.md)([string](language.types.string.md) `$slop`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [setUserFields](solrdismaxquery.setuserfields.md)([string](language.types.string.md) `$fields`): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [useDisMaxQueryParser](solrdismaxquery.usedismaxqueryparser.md)(): [SolrDisMaxQuery](class.solrdismaxquery.md)

public function [useEDisMaxQueryParser](solrdismaxquery.useedismaxqueryparser.md)(): [SolrDisMaxQuery](class.solrdismaxquery.md)

/\* Métodos herdados \*/

public function [SolrQuery::addExpandFilterQuery](solrquery.addexpandfilterquery.md)([string](language.types.string.md) `$fq`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addExpandSortField](solrquery.addexpandsortfield.md)([string](language.types.string.md) `$field`, [string](language.types.string.md) `$order` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addFacetDateField](solrquery.addfacetdatefield.md)([string](language.types.string.md) `$dateField`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addFacetDateOther](solrquery.addfacetdateother.md)([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addFacetField](solrquery.addfacetfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addFacetQuery](solrquery.addfacetquery.md)([string](language.types.string.md) `$facetQuery`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addField](solrquery.addfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addFilterQuery](solrquery.addfilterquery.md)([string](language.types.string.md) `$fq`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addGroupField](solrquery.addgroupfield.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addGroupFunction](solrquery.addgroupfunction.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addGroupQuery](solrquery.addgroupquery.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addGroupSortField](solrquery.addgroupsortfield.md)([string](language.types.string.md) `$field`, [int](language.types.integer.md) `$order` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addHighlightField](solrquery.addhighlightfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addMltField](solrquery.addmltfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addMltQueryField](solrquery.addmltqueryfield.md)([string](language.types.string.md) `$field`, [float](language.types.float.md) `$boost`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addSortField](solrquery.addsortfield.md)([string](language.types.string.md) `$field`, [int](language.types.integer.md) `$order` = SolrQuery::ORDER\_DESC): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addStatsFacet](solrquery.addstatsfacet.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::addStatsField](solrquery.addstatsfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::collapse](solrquery.collapse.md)([SolrCollapseFunction](class.solrcollapsefunction.md) `$collapseFunction`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::getExpand](solrquery.getexpand.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getExpandFilterQueries](solrquery.getexpandfilterqueries.md)(): [array](language.types.array.md)

public function [SolrQuery::getExpandQuery](solrquery.getexpandquery.md)(): [array](language.types.array.md)

public function [SolrQuery::getExpandRows](solrquery.getexpandrows.md)(): [int](language.types.integer.md)

public function [SolrQuery::getExpandSortFields](solrquery.getexpandsortfields.md)(): [array](language.types.array.md)

public function [SolrQuery::getFacet](solrquery.getfacet.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getFacetDateEnd](solrquery.getfacetdateend.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getFacetDateFields](solrquery.getfacetdatefields.md)(): [array](language.types.array.md)

public function [SolrQuery::getFacetDateGap](solrquery.getfacetdategap.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getFacetDateHardEnd](solrquery.getfacetdatehardend.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getFacetDateOther](solrquery.getfacetdateother.md)([string](language.types.string.md) `$field_override` = ?): [array](language.types.array.md)

public function [SolrQuery::getFacetDateStart](solrquery.getfacetdatestart.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getFacetFields](solrquery.getfacetfields.md)(): [array](language.types.array.md)

public function [SolrQuery::getFacetLimit](solrquery.getfacetlimit.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [SolrQuery::getFacetMethod](solrquery.getfacetmethod.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getFacetMinCount](solrquery.getfacetmincount.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [SolrQuery::getFacetMissing](solrquery.getfacetmissing.md)([string](language.types.string.md) `$field_override` = ?): [bool](language.types.boolean.md)

public function [SolrQuery::getFacetOffset](solrquery.getfacetoffset.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [SolrQuery::getFacetPrefix](solrquery.getfacetprefix.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getFacetQueries](solrquery.getfacetqueries.md)(): [array](language.types.array.md)

public function [SolrQuery::getFacetSort](solrquery.getfacetsort.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [SolrQuery::getFields](solrquery.getfields.md)(): [array](language.types.array.md)

public function [SolrQuery::getFilterQueries](solrquery.getfilterqueries.md)(): [array](language.types.array.md)

public function [SolrQuery::getGroup](solrquery.getgroup.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getGroupCachePercent](solrquery.getgroupcachepercent.md)(): [int](language.types.integer.md)

public function [SolrQuery::getGroupFacet](solrquery.getgroupfacet.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getGroupFields](solrquery.getgroupfields.md)(): [array](language.types.array.md)

public function [SolrQuery::getGroupFormat](solrquery.getgroupformat.md)(): [string](language.types.string.md)

public function [SolrQuery::getGroupFunctions](solrquery.getgroupfunctions.md)(): [array](language.types.array.md)

public function [SolrQuery::getGroupLimit](solrquery.getgrouplimit.md)(): [int](language.types.integer.md)

public function [SolrQuery::getGroupMain](solrquery.getgroupmain.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getGroupNGroups](solrquery.getgroupngroups.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getGroupOffset](solrquery.getgroupoffset.md)(): [int](language.types.integer.md)

public function [SolrQuery::getGroupQueries](solrquery.getgroupqueries.md)(): [array](language.types.array.md)

public function [SolrQuery::getGroupSortFields](solrquery.getgroupsortfields.md)(): [array](language.types.array.md)

public function [SolrQuery::getGroupTruncate](solrquery.getgrouptruncate.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getHighlight](solrquery.gethighlight.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getHighlightAlternateField](solrquery.gethighlightalternatefield.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getHighlightFields](solrquery.gethighlightfields.md)(): [array](language.types.array.md)

public function [SolrQuery::getHighlightFormatter](solrquery.gethighlightformatter.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getHighlightFragmenter](solrquery.gethighlightfragmenter.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getHighlightFragsize](solrquery.gethighlightfragsize.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [SolrQuery::getHighlightHighlightMultiTerm](solrquery.gethighlighthighlightmultiterm.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getHighlightMaxAlternateFieldLength](solrquery.gethighlightmaxalternatefieldlength.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [SolrQuery::getHighlightMaxAnalyzedChars](solrquery.gethighlightmaxanalyzedchars.md)(): [int](language.types.integer.md)

public function [SolrQuery::getHighlightMergeContiguous](solrquery.gethighlightmergecontiguous.md)([string](language.types.string.md) `$field_override` = ?): [bool](language.types.boolean.md)

public function [SolrQuery::getHighlightQuery](solrquery.gethighlightquery.md)(): [string](language.types.string.md)

public function [SolrQuery::getHighlightRegexMaxAnalyzedChars](solrquery.gethighlightregexmaxanalyzedchars.md)(): [int](language.types.integer.md)

public function [SolrQuery::getHighlightRegexPattern](solrquery.gethighlightregexpattern.md)(): [string](language.types.string.md)

public function [SolrQuery::getHighlightRegexSlop](solrquery.gethighlightregexslop.md)(): [float](language.types.float.md)

public function [SolrQuery::getHighlightRequireFieldMatch](solrquery.gethighlightrequirefieldmatch.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getHighlightSimplePost](solrquery.gethighlightsimplepost.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getHighlightSimplePre](solrquery.gethighlightsimplepre.md)([string](language.types.string.md) `$field_override` = ?): [string](language.types.string.md)

public function [SolrQuery::getHighlightSnippets](solrquery.gethighlightsnippets.md)([string](language.types.string.md) `$field_override` = ?): [int](language.types.integer.md)

public function [SolrQuery::getHighlightUsePhraseHighlighter](solrquery.gethighlightusephrasehighlighter.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getMlt](solrquery.getmlt.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getMltBoost](solrquery.getmltboost.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getMltCount](solrquery.getmltcount.md)(): [int](language.types.integer.md)

public function [SolrQuery::getMltFields](solrquery.getmltfields.md)(): [array](language.types.array.md)

public function [SolrQuery::getMltMaxNumQueryTerms](solrquery.getmltmaxnumqueryterms.md)(): [int](language.types.integer.md)

public function [SolrQuery::getMltMaxNumTokens](solrquery.getmltmaxnumtokens.md)(): [int](language.types.integer.md)

public function [SolrQuery::getMltMaxWordLength](solrquery.getmltmaxwordlength.md)(): [int](language.types.integer.md)

public function [SolrQuery::getMltMinDocFrequency](solrquery.getmltmindocfrequency.md)(): [int](language.types.integer.md)

public function [SolrQuery::getMltMinTermFrequency](solrquery.getmltmintermfrequency.md)(): [int](language.types.integer.md)

public function [SolrQuery::getMltMinWordLength](solrquery.getmltminwordlength.md)(): [int](language.types.integer.md)

public function [SolrQuery::getMltQueryFields](solrquery.getmltqueryfields.md)(): [array](language.types.array.md)

public function [SolrQuery::getQuery](solrquery.getquery.md)(): [string](language.types.string.md)

public function [SolrQuery::getRows](solrquery.getrows.md)(): [int](language.types.integer.md)

public function [SolrQuery::getSortFields](solrquery.getsortfields.md)(): [array](language.types.array.md)

public function [SolrQuery::getStart](solrquery.getstart.md)(): [int](language.types.integer.md)

public function [SolrQuery::getStats](solrquery.getstats.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getStatsFacets](solrquery.getstatsfacets.md)(): [array](language.types.array.md)

public function [SolrQuery::getStatsFields](solrquery.getstatsfields.md)(): [array](language.types.array.md)

public function [SolrQuery::getTerms](solrquery.getterms.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getTermsField](solrquery.gettermsfield.md)(): [string](language.types.string.md)

public function [SolrQuery::getTermsIncludeLowerBound](solrquery.gettermsincludelowerbound.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getTermsIncludeUpperBound](solrquery.gettermsincludeupperbound.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getTermsLimit](solrquery.gettermslimit.md)(): [int](language.types.integer.md)

public function [SolrQuery::getTermsLowerBound](solrquery.gettermslowerbound.md)(): [string](language.types.string.md)

public function [SolrQuery::getTermsMaxCount](solrquery.gettermsmaxcount.md)(): [int](language.types.integer.md)

public function [SolrQuery::getTermsMinCount](solrquery.gettermsmincount.md)(): [int](language.types.integer.md)

public function [SolrQuery::getTermsPrefix](solrquery.gettermsprefix.md)(): [string](language.types.string.md)

public function [SolrQuery::getTermsReturnRaw](solrquery.gettermsreturnraw.md)(): [bool](language.types.boolean.md)

public function [SolrQuery::getTermsSort](solrquery.gettermssort.md)(): [int](language.types.integer.md)

public function [SolrQuery::getTermsUpperBound](solrquery.gettermsupperbound.md)(): [string](language.types.string.md)

public function [SolrQuery::getTimeAllowed](solrquery.gettimeallowed.md)(): [int](language.types.integer.md)

public function [SolrQuery::removeExpandFilterQuery](solrquery.removeexpandfilterquery.md)([string](language.types.string.md) `$fq`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeExpandSortField](solrquery.removeexpandsortfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeFacetDateField](solrquery.removefacetdatefield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeFacetDateOther](solrquery.removefacetdateother.md)([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeFacetField](solrquery.removefacetfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeFacetQuery](solrquery.removefacetquery.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeField](solrquery.removefield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeFilterQuery](solrquery.removefilterquery.md)([string](language.types.string.md) `$fq`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeHighlightField](solrquery.removehighlightfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeMltField](solrquery.removemltfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeMltQueryField](solrquery.removemltqueryfield.md)([string](language.types.string.md) `$queryField`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeSortField](solrquery.removesortfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeStatsFacet](solrquery.removestatsfacet.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::removeStatsField](solrquery.removestatsfield.md)([string](language.types.string.md) `$field`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setEchoHandler](solrquery.setechohandler.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setEchoParams](solrquery.setechoparams.md)([string](language.types.string.md) `$type`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setExpand](solrquery.setexpand.md)([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setExpandQuery](solrquery.setexpandquery.md)([string](language.types.string.md) `$q`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setExpandRows](solrquery.setexpandrows.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setExplainOther](solrquery.setexplainother.md)([string](language.types.string.md) `$query`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacet](solrquery.setfacet.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetDateEnd](solrquery.setfacetdateend.md)([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetDateGap](solrquery.setfacetdategap.md)([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetDateHardEnd](solrquery.setfacetdatehardend.md)([bool](language.types.boolean.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetDateStart](solrquery.setfacetdatestart.md)([string](language.types.string.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetEnumCacheMinDefaultFrequency](solrquery.setfacetenumcachemindefaultfrequency.md)([int](language.types.integer.md) `$frequency`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetLimit](solrquery.setfacetlimit.md)([int](language.types.integer.md) `$limit`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetMethod](solrquery.setfacetmethod.md)([string](language.types.string.md) `$method`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetMinCount](solrquery.setfacetmincount.md)([int](language.types.integer.md) `$mincount`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetMissing](solrquery.setfacetmissing.md)([bool](language.types.boolean.md) `$flag`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetOffset](solrquery.setfacetoffset.md)([int](language.types.integer.md) `$offset`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetPrefix](solrquery.setfacetprefix.md)([string](language.types.string.md) `$prefix`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setFacetSort](solrquery.setfacetsort.md)([int](language.types.integer.md) `$facetSort`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setGroup](solrquery.setgroup.md)([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setGroupCachePercent](solrquery.setgroupcachepercent.md)([int](language.types.integer.md) `$percent`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setGroupFacet](solrquery.setgroupfacet.md)([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setGroupFormat](solrquery.setgroupformat.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setGroupLimit](solrquery.setgrouplimit.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setGroupMain](solrquery.setgroupmain.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setGroupNGroups](solrquery.setgroupngroups.md)([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setGroupOffset](solrquery.setgroupoffset.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setGroupTruncate](solrquery.setgrouptruncate.md)([bool](language.types.boolean.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlight](solrquery.sethighlight.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightAlternateField](solrquery.sethighlightalternatefield.md)([string](language.types.string.md) `$field`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightFormatter](solrquery.sethighlightformatter.md)([string](language.types.string.md) `$formatter`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightFragmenter](solrquery.sethighlightfragmenter.md)([string](language.types.string.md) `$fragmenter`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightFragsize](solrquery.sethighlightfragsize.md)([int](language.types.integer.md) `$size`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightHighlightMultiTerm](solrquery.sethighlighthighlightmultiterm.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightMaxAlternateFieldLength](solrquery.sethighlightmaxalternatefieldlength.md)([int](language.types.integer.md) `$fieldLength`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightMaxAnalyzedChars](solrquery.sethighlightmaxanalyzedchars.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightMergeContiguous](solrquery.sethighlightmergecontiguous.md)([bool](language.types.boolean.md) `$flag`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightQuery](solrquery.sethighlightquery.md)([string](language.types.string.md) `$q`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightRegexMaxAnalyzedChars](solrquery.sethighlightregexmaxanalyzedchars.md)([int](language.types.integer.md) `$maxAnalyzedChars`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightRegexPattern](solrquery.sethighlightregexpattern.md)([string](language.types.string.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightRegexSlop](solrquery.sethighlightregexslop.md)([float](language.types.float.md) `$factor`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightRequireFieldMatch](solrquery.sethighlightrequirefieldmatch.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightSimplePost](solrquery.sethighlightsimplepost.md)([string](language.types.string.md) `$simplePost`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightSimplePre](solrquery.sethighlightsimplepre.md)([string](language.types.string.md) `$simplePre`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightSnippets](solrquery.sethighlightsnippets.md)([int](language.types.integer.md) `$value`, [string](language.types.string.md) `$field_override` = ?): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setHighlightUsePhraseHighlighter](solrquery.sethighlightusephrasehighlighter.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setMlt](solrquery.setmlt.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setMltBoost](solrquery.setmltboost.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setMltCount](solrquery.setmltcount.md)([int](language.types.integer.md) `$count`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setMltMaxNumQueryTerms](solrquery.setmltmaxnumqueryterms.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setMltMaxNumTokens](solrquery.setmltmaxnumtokens.md)([int](language.types.integer.md) `$value`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setMltMaxWordLength](solrquery.setmltmaxwordlength.md)([int](language.types.integer.md) `$maxWordLength`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setMltMinDocFrequency](solrquery.setmltmindocfrequency.md)([int](language.types.integer.md) `$minDocFrequency`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setMltMinTermFrequency](solrquery.setmltmintermfrequency.md)([int](language.types.integer.md) `$minTermFrequency`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setMltMinWordLength](solrquery.setmltminwordlength.md)([int](language.types.integer.md) `$minWordLength`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setOmitHeader](solrquery.setomitheader.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setQuery](solrquery.setquery.md)([string](language.types.string.md) `$query`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setRows](solrquery.setrows.md)([int](language.types.integer.md) `$rows`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setShowDebugInfo](solrquery.setshowdebuginfo.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setStart](solrquery.setstart.md)([int](language.types.integer.md) `$start`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setStats](solrquery.setstats.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTerms](solrquery.setterms.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsField](solrquery.settermsfield.md)([string](language.types.string.md) `$fieldname`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsIncludeLowerBound](solrquery.settermsincludelowerbound.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsIncludeUpperBound](solrquery.settermsincludeupperbound.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsLimit](solrquery.settermslimit.md)([int](language.types.integer.md) `$limit`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsLowerBound](solrquery.settermslowerbound.md)([string](language.types.string.md) `$lowerBound`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsMaxCount](solrquery.settermsmaxcount.md)([int](language.types.integer.md) `$frequency`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsMinCount](solrquery.settermsmincount.md)([int](language.types.integer.md) `$frequency`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsPrefix](solrquery.settermsprefix.md)([string](language.types.string.md) `$prefix`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsReturnRaw](solrquery.settermsreturnraw.md)([bool](language.types.boolean.md) `$flag`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsSort](solrquery.settermssort.md)([int](language.types.integer.md) `$sortType`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTermsUpperBound](solrquery.settermsupperbound.md)([string](language.types.string.md) `$upperBound`): [SolrQuery](class.solrquery.md)

public function [SolrQuery::setTimeAllowed](solrquery.settimeallowed.md)([int](language.types.integer.md) `$timeAllowed`): [SolrQuery](class.solrquery.md)

}

## Constantes predefinidas

**`SolrDisMaxQuery::ORDER_ASC`**
:   Usada para especificar que a classificação deve ser em ordem ascendente (duplicado para facilitar a migração)

**`SolrDisMaxQuery::ORDER_DESC`**
:   Usada para especificar que a classificação deve estar em ordem desdendente (duplicado para facilitar a migração)

**`SolrDisMaxQuery::FACET_SORT_INDEX`**
:   Usada para especificar que a faceta deve ser classificada por índice (duplicado para facilitar a migração)

**`SolrDisMaxQuery::FACET_SORT_COUNT`**
:   Usada para especificar que a faceta deve ser classificada por contagem (duplicado para facilitar a migração)

**`SolrDisMaxQuery::TERMS_SORT_INDEX`**
:   Usada no TermsComponent (duplicado para facilitar a migração)

**`SolrDisMaxQuery::TERMS_SORT_COUNT`**
:   Usada no TermsComponent (duplicado para facilitar a migração)

## Índice

- [SolrDisMaxQuery::addBigramPhraseField](solrdismaxquery.addbigramphrasefield.md) — Adiciona um campo de frase bigrama (parâmetro pf2)
- [SolrDisMaxQuery::addBoostQuery](solrdismaxquery.addboostquery.md) — Adiciona um campo de consulta de impulso com valor e impulso (parâmetro bq)
- [SolrDisMaxQuery::addPhraseField](solrdismaxquery.addphrasefield.md) — Adiciona um campo de frase (parâmetro pf)
- [SolrDisMaxQuery::addQueryField](solrdismaxquery.addqueryfield.md) — Adiciona um campo de consulta com impulso opcional (parâmetro qf)
- [SolrDisMaxQuery::addTrigramPhraseField](solrdismaxquery.addtrigramphrasefield.md) — Adiciona um campo de frase trigrama (parâmetro pf3)
- [SolrDisMaxQuery::addUserField](solrdismaxquery.adduserfield.md) — Adiciona um campo ao parâmetro campos do usuário (uf)
- [SolrDisMaxQuery::\_\_construct](solrdismaxquery.construct.md) — Construtor da classe
- [SolrDisMaxQuery::removeBigramPhraseField](solrdismaxquery.removebigramphrasefield.md) — Remove o campo de frase bigrama (parâmetro pf2)
- [SolrDisMaxQuery::removeBoostQuery](solrdismaxquery.removeboostquery.md) — Remove uma consulta de impulso parcial por nome de campo (bq)
- [SolrDisMaxQuery::removePhraseField](solrdismaxquery.removephrasefield.md) — Remover um campo de frase (parâmetro pf)
- [SolrDisMaxQuery::removeQueryField](solrdismaxquery.removequeryfield.md) — Remove um campo de consulta (parâmetro qf)
- [SolrDisMaxQuery::removeTrigramPhraseField](solrdismaxquery.removetrigramphrasefield.md) — Remove um campo de frase trigrama (parâmetro pf3)
- [SolrDisMaxQuery::removeUserField](solrdismaxquery.removeuserfield.md) — Remove um campo do parâmetro de campos de usuário (uf)
- [SolrDisMaxQuery::setBigramPhraseFields](solrdismaxquery.setbigramphrasefields.md) — Define campos de frase bigrama e seus impulsos (e slops) usando o parâmetro pf2
- [SolrDisMaxQuery::setBigramPhraseSlop](solrdismaxquery.setbigramphraseslop.md) — Define o slop da frase bigrama (parâmetro ps2)
- [SolrDisMaxQuery::setBoostFunction](solrdismaxquery.setboostfunction.md) — Define uma função de impulso (parâmetro bf)
- [SolrDisMaxQuery::setBoostQuery](solrdismaxquery.setboostquery.md) — Define diretamente o parâmetro de consulta de impulso (bq)
- [SolrDisMaxQuery::setMinimumMatch](solrdismaxquery.setminimummatch.md) — Define a correspondência mínima "Deveria" (mm)
- [SolrDisMaxQuery::setPhraseFields](solrdismaxquery.setphrasefields.md) — Define campos de frase e seus impulsos (e slops) usando o parâmetro pf2
- [SolrDisMaxQuery::setPhraseSlop](solrdismaxquery.setphraseslop.md) — Define o slop padrão em consultas de frase (parâmetro ps)
- [SolrDisMaxQuery::setQueryAlt](solrdismaxquery.setqueryalt.md) — Define a consulta alternativa (parâmetro q.alt)
- [SolrDisMaxQuery::setQueryPhraseSlop](solrdismaxquery.setqueryphraseslop.md) — Especifica a quantidade de slop permitida em consultas de frase explicitamente incluídas na string de consulta do usuário (parâmetro qf)
- [SolrDisMaxQuery::setTieBreaker](solrdismaxquery.settiebreaker.md) — Define o parâmetro de desempate (parâmetro tie)
- [SolrDisMaxQuery::setTrigramPhraseFields](solrdismaxquery.settrigramphrasefields.md) — Define diretamente campos de frase trigrama (parâmetro pf3)
- [SolrDisMaxQuery::setTrigramPhraseSlop](solrdismaxquery.settrigramphraseslop.md) — Define slop de frase trigrama (parâmetro ps3)
- [SolrDisMaxQuery::setUserFields](solrdismaxquery.setuserfields.md) — Define parâmetro de campos de usuário (uf)
- [SolrDisMaxQuery::useDisMaxQueryParser](solrdismaxquery.usedismaxqueryparser.md) — Troca o analisador de consulta para o DisMax
- [SolrDisMaxQuery::useEDisMaxQueryParser](solrdismaxquery.useedismaxqueryparser.md) — Troca o analisador de consulta para o EDisMax

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
