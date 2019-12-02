<?php
namespace FinancialData\Model;

interface IFinancialData extends IFinancialDataTypeIdentify, IFinancialDataTypeName, IFinancialDataTypeEnName
{
    const TYPE = array(
        'NULL' => 0,
        'QYFKXX' => 1,
        'ZYGLRYXX' => 2,
        'GDJCZXX' => 3,
        'DWTZXX' => 4,
        'CWZBXX' => 5,
        'ZSCQCZDJ' => 6,
        'GQCZDJ' => 7,
        'DCDYDJXX' => 8,
        'SFSSXX' => 9,
        'FYZXXX' => 10,
        'NSXX' => 11,
        'SBJCXX' => 12,
        'GJJJCXX' => 13,
        'GGSYJFXX' => 14,
        'BDCDYDJXX' => 15,
        'JCKXX' => 16,
        'XZXKXX' => 17,
        'XZCFXX' => 18,
        'WBPJXX' => 19,
        'HJPJXX' => 20,
        'ZLHZZXX' => 21,
        'XEDKXX' => 22,
        'MJJDXX' => 23,
        'RZDBXX' => 24,
        'QTZTSXXX' => 25,
    );
    
    const SUBJECT_CATEGORY = array(
        'NULL' => 0,
        'FARMER' => 1,
        'ENTERPRISE' => 2
    );
}