<?php
/**
 * ALIPAY API: alipay.micropay.order.unfreeze request
 * 
 * @author auto create
 * @since 1.0, 2013-05-02 10:41:39
 */
class AlipayMicropayOrderUnfreezeRequest
{
	/** 
	 * 冻结资金流水号,在创建资金订单时支付宝返回的流水号
	 **/
	private $alipayOrderNo;
	
	/** 
	 * 冻结备注
	 **/
	private $memo;
	
	private $apiParas = array();
	
	public function setAlipayOrderNo($alipayOrderNo)
	{
		$this->alipayOrderNo = $alipayOrderNo;
		$this->apiParas["alipay_order_no"] = $alipayOrderNo;
	}

	public function getAlipayOrderNo()
	{
		return $this->alipayOrderNo;
	}

	public function setMemo($memo)
	{
		$this->memo = $memo;
		$this->apiParas["memo"] = $memo;
	}

	public function getMemo()
	{
		return $this->memo;
	}

	public function getApiMethodName()
	{
		return "alipay.micropay.order.unfreeze";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
}
