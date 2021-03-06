<?php
/**
 * ALIPAY API: alipay.asset.account.get request
 * 
 * @author auto create
 * @since 1.0, 2013-05-10 10:55:30
 */
class AlipayAssetAccountGetRequest
{
	/** 
	 * 使用该app提供用户信息的商户，可以和app相同。
	 **/
	private $providerId;
	
	/** 
	 * 用户在商户网站的会员标识。商户需确保其唯一性，不可变更。
注意：根据provider_user_id查询时该值不可空。
	 **/
	private $providerUserId;
	
	private $apiParas = array();
	
	public function setProviderId($providerId)
	{
		$this->providerId = $providerId;
		$this->apiParas["provider_id"] = $providerId;
	}

	public function getProviderId()
	{
		return $this->providerId;
	}

	public function setProviderUserId($providerUserId)
	{
		$this->providerUserId = $providerUserId;
		$this->apiParas["provider_user_id"] = $providerUserId;
	}

	public function getProviderUserId()
	{
		return $this->providerUserId;
	}

	public function getApiMethodName()
	{
		return "alipay.asset.account.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
}
