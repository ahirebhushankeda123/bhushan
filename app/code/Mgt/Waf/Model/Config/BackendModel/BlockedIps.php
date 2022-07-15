<?php
 namespace Mgt\Waf\Model\Config\BackendModel; use Mgt\Waf\Model\Config\BackendModel\Value as ConfigValue; use Mgt\Waf\Model\Aws\Waf as AwsWaf; class BlockedIps extends ConfigValue { protected function _afterLoad() { goto D4c2a; e370d: foreach ($blockedIpsIPv4 as $ip) { goto c0265; b8138: b2451: goto faccb; Be8bf: D0b93: goto b8138; c0265: if (!(substr($ip, -3) == "\57\x33\x32")) { goto D0b93; } goto E6687; E6687: $blockedIps[] = substr($ip, 0, -3); goto Be8bf; faccb: } goto A146f; B52ee: E8d13: goto Ff261; e70db: if (!(false === empty($awsAccessKey) && false === empty($projectName))) { goto B51c2; } goto cbd06; cbd06: $awsSecretAccessKey = $this->getAwsSecretAccessKey(); goto Bb950; cef71: foreach ($blockedIpsIPv6 as $ip) { goto b6e2f; A51b0: Dca0c: goto E1245; Ec578: $blockedIps[] = substr($ip, 0, -4); goto A51b0; b6e2f: if (!(substr($ip, -4) == "\x2f\x31\x32\x38")) { goto Dca0c; } goto Ec578; E1245: Adb93: goto e6af5; e6af5: } goto A620c; A94b5: goto B8996; goto B52ee; eccd8: $projectName = $this->getProjectName(); goto e70db; E8b5e: $blockedIpsIPv6 = $awsWaf->getIpAddressesForIpSet(AwsWaf::IP_SET_BLOCKED_IPS_IPV6); goto C2ac6; D4c2a: $sessionConfigData = $this->getSessionConfigData(); goto Dad2b; ce770: if (!(false === empty($blockedIpsIPv4))) { goto Afaac; } goto e370d; F8130: if (true === isset($sessionConfigData["\147\x72\157\165\x70\x73"]["\142\154\157\x63\153\x65\x64\x5f\151\160\163"]["\x66\x69\x65\x6c\x64\x73"]["\x62\154\x6f\143\x6b\145\x64\137\151\x70\163"]["\166\141\x6c\165\x65"])) { goto E8d13; } goto A112c; Ff261: $value = $sessionConfigData["\x67\162\157\x75\x70\163"]["\x62\154\157\143\153\x65\x64\x5f\x69\160\163"]["\146\x69\145\x6c\x64\x73"]["\x62\x6c\x6f\x63\x6b\145\144\x5f\151\x70\x73"]["\x76\141\x6c\165\145"]; goto e96c0; Dad2b: $value = ''; goto F8130; Df3a5: ad126: goto Bafc0; A620c: Bcf8f: goto Df3a5; ce605: B51c2: goto A94b5; e8c4b: $blockedIpsIPv4 = $awsWaf->getIpAddressesForIpSet(AwsWaf::IP_SET_BLOCKED_IPS_IPV4); goto ce770; A146f: b77fc: goto Cb4dd; c1f3f: $blockedIps = []; goto Cdf24; e96c0: B8996: goto C16d5; C16d5: $this->setValue($value); goto ca3cb; Bb950: $awsRegion = $this->getAwsRegion(); goto c1f3f; C2ac6: if (!(false === empty($blockedIpsIPv6))) { goto ad126; } goto cef71; Bafc0: $value = implode(PHP_EOL, $blockedIps); goto ce605; Cb4dd: Afaac: goto E8b5e; Cdf24: $awsWaf = new AwsWaf($awsAccessKey, $awsSecretAccessKey, $awsRegion, $projectName); goto e8c4b; A112c: $awsAccessKey = $this->getAwsAccessKey(); goto eccd8; ca3cb: } }