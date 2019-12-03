<?php
namespace FinancialData\Model;

interface IFinancialDataTypeIdentify
{
    const TYPE_IDENTIFY = array(
        IFinancialData::TYPE['NULL'] => 'NULL',
        IFinancialData::TYPE['QYFKXX'] => 'QYFKXX',
        IFinancialData::TYPE['ZYGLRYXX'] => 'ZYGLRYXX',
        IFinancialData::TYPE['GDJCZXX'] => 'GDJCZXX',
        IFinancialData::TYPE['DWTZXX'] => 'DWTZXX',
        IFinancialData::TYPE['CWZBXX'] => 'CWZBXX',
        IFinancialData::TYPE['ZSCQCZDJ'] => 'ZSCQCZDJ',
        IFinancialData::TYPE['GQCZDJ'] => 'GQCZDJ',
        IFinancialData::TYPE['DCDYDJXX'] => 'DCDYDJXX',
        IFinancialData::TYPE['SFSSXX'] => 'SFSSXX',
        IFinancialData::TYPE['FYZXXX'] => 'FYZXXX',
        IFinancialData::TYPE['NSXX'] => 'NSXX',
        IFinancialData::TYPE['SBJCXX'] => 'SBJCXX',
        IFinancialData::TYPE['GJJJCXX'] => 'GJJJCXX',
        IFinancialData::TYPE['GGSYJFXX'] => 'GGSYJFXX',
        IFinancialData::TYPE['BDCDYDJXX'] => 'BDCDYDJXX',
        IFinancialData::TYPE['JCKXX'] => 'JCKXX',
        IFinancialData::TYPE['XZXKXX'] => 'XZXKXX',
        IFinancialData::TYPE['XZCFXX'] => 'XZCFXX',
        IFinancialData::TYPE['WBPJXX'] => 'WBPJXX',
        IFinancialData::TYPE['HJPJXX'] => 'HJPJXX',
        IFinancialData::TYPE['ZLHZZXX'] => 'ZLHZZXX',
        IFinancialData::TYPE['XEDKXX'] => 'XEDKXX',
        IFinancialData::TYPE['MJJDXX'] => 'MJJDXX',
        IFinancialData::TYPE['RZDBXX'] => 'RZDBXX',
        IFinancialData::TYPE['QTZTSXXX'] => 'QTZTSXXX',
        IFinancialData::TYPE['TEST'] => 'TEST',
    );
}