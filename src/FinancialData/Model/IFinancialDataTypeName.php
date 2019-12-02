<?php
namespace FinancialData\Model;

interface IFinancialDataTypeName
{
    const TYPE_NAME = array(
        IFinancialData::TYPE['NULL'] => 'NULL',
        IFinancialData::TYPE['QYFKXX'] => '企业概况信息',
        IFinancialData::TYPE['ZYGLRYXX'] => '主要管理人员信息',
        IFinancialData::TYPE['GDJCZXX'] => '股东及出资信息',
        IFinancialData::TYPE['DWTZXX'] => '对外投资信息',
        IFinancialData::TYPE['CWZBXX'] => '财务指标信息',
        IFinancialData::TYPE['ZSCQCZDJ'] => '知识产权出质登记',
        IFinancialData::TYPE['GQCZDJ'] => '股权出质登记',
        IFinancialData::TYPE['DCDYDJXX'] => '动产抵押登记信息',
        IFinancialData::TYPE['SFSSXX'] => '法院诉讼信息',
        IFinancialData::TYPE['FYZXXX'] => '法院执行信息',
        IFinancialData::TYPE['NSXX'] => '纳税信息',
        IFinancialData::TYPE['SBJCXX'] => '社保缴存信息',
        IFinancialData::TYPE['GJJJCXX'] => '公积金缴存信息',
        IFinancialData::TYPE['GGSYJFXX'] => '公共事业缴费信息',
        IFinancialData::TYPE['BDCDYDJXX'] => '不动产抵押登记信息',
        IFinancialData::TYPE['JCKXX'] => '进出口信息',
        IFinancialData::TYPE['XZXKXX'] => '行政许可信息',
        IFinancialData::TYPE['XZCFXX'] => '行政处罚信息',
        IFinancialData::TYPE['WBPJXX'] => '外部评级信息',
        IFinancialData::TYPE['HJPJXX'] => '环境评价信息',
        IFinancialData::TYPE['ZLHZZXX'] => '专利或资质信息',
        IFinancialData::TYPE['XEDKXX'] => '小额贷款信息',
        IFinancialData::TYPE['MJJDXX'] => '民间借贷信息',
        IFinancialData::TYPE['RZDBXX'] => '融资担保信息',
        IFinancialData::TYPE['QTZTSXXX'] => '其他重要事项信息',
    );
}