<?php
 namespace Mgt\Varnish\Block\Adminhtml\Cache\Purge; class Management extends \Magento\Backend\Block\Template { protected $varnishConfig; protected $config; public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\App\Config $config, \Mgt\Varnish\Model\Cache\Config $varnishConfig, array $data = []) { goto ecc5e; ecc5e: parent::__construct($context, $data); goto Deab0; Deab0: $this->config = $config; goto ccf6a; ccf6a: $this->varnishConfig = $varnishConfig; goto Ccd8a; Ccd8a: } public function getWebsites() { return $this->_storeManager->getWebsites(); } public function getStoreGroups(\Magento\Store\Model\Website $website) { return $website->getGroups(); } public function getStores(\Magento\Store\Model\Group $group) { goto Af28f; f58d8: if (!($storeIds = $this->getStoreIds())) { goto Df215; } goto e5303; c4d60: return $stores; goto ccffc; Af28f: $stores = $group->getStores(); goto f58d8; b73a8: Df215: goto c4d60; e5303: foreach (array_keys($stores) as $storeId) { goto a895c; a895c: if (in_array($storeId, $storeIds)) { goto Bff24; } goto a9dae; E3e81: Bff24: goto d82ac; a9dae: unset($stores[$storeId]); goto E3e81; d82ac: be397: goto ca3df; ca3df: } goto D5e6c; D5e6c: E4480: goto b73a8; ccffc: } public function getStoreBaseUrl(\Magento\Store\Model\Store $store) { $storeBaseUrl = $this->config->getValue("\x77\x65\x62\57\165\x6e\x73\145\x63\x75\x72\x65\x2f\142\141\163\145\x5f\165\162\x6c", \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $store); return $storeBaseUrl; } public function getStorePurgeUrl(\Magento\Store\Model\Store $store) { $storePurgeUrl = $this->getUrl("\x6d\147\164\x76\x61\x72\156\x69\163\150\x2f\160\165\162\147\x65\x2f\x61\x63\x74\151\157\156", ["\163\164\x6f\162\145\x5f\151\144" => $store->getStoreId()]); return $storePurgeUrl; } public function getSinglePurgeActionUrl() { $singlePurgeActionUrl = $this->getUrl("\155\x67\x74\166\141\162\156\x69\163\150\x2f\160\165\x72\147\x65\57\x73\x69\156\147\154\145"); return $singlePurgeActionUrl; } }
