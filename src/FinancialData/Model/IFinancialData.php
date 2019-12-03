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
        'TEST' => 500,
    );
    
    const SUBJECT_CATEGORY = array(
        'NULL' => 0,
        'FARMER' => 1,
        'ENTERPRISE' => 2
    );
    
    const CATEGORY_CN = array(
        'QYGK' => '企业概况',
        'JYZK' => '经营状况',
        'FLSS' => '法律诉讼',
        'PJXX' => '评价信息',
        'QTXX' => '其他信息',
    );

    const TYPE_RELATIONSHIP = array(
        self::CATEGORY_CN['QYGK'] => array(
            self::TYPE['ZYGLRYXX'],
            self::TYPE['GDJCZXX'],
            self::TYPE['DWTZXX'],
            self::TYPE['CWZBXX'],
        ),
        self::CATEGORY_CN['JYZK'] => array(
            self::TYPE['ZSCQCZDJ'],
            self::TYPE['GQCZDJ'],
            self::TYPE['DCDYDJXX'],
            self::TYPE['NSXX'],
            self::TYPE['JCKXX'],
            self::TYPE['XZXKXX'],
            self::TYPE['XZCFXX'],
            self::TYPE['ZLHZZXX'],
            self::TYPE['BDCDYDJXX']
        ),
        self::CATEGORY_CN['FLSS'] => array(
            self::TYPE['SFSSXX'],
            self::TYPE['FYZXXX'],
        ),
        self::CATEGORY_CN['PJXX'] => array(
            self::TYPE['WBPJXX'],
            self::TYPE['HJPJXX'],
        ),
        self::CATEGORY_CN['QTXX'] => array(
            self::TYPE['SBJCXX'],
            self::TYPE['GJJJCXX'],
            self::TYPE['GGSYJFXX'],
            self::TYPE['XEDKXX'],
            self::TYPE['MJJDXX'],
            self::TYPE['RZDBXX'],
            self::TYPE['QTZTSXXX'],
        ),
    );
}