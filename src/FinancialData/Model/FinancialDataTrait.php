<?php
namespace FinancialData\Model;

trait FinancialDataTrait
{

    /**
     * @var $id 金融信息id
     */
    protected $id;
    /**
     * @var int $type 金融信息类型
     */
    protected $type;
    /**
     * @var int $subjectCategory 所属主体类别
     */
    protected $subjectCategory;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setType(int $type) : void
    {
        $this->type = in_array($type, self::TYPE) ? $type : self::TYPE['NULL'];
    }

    public function getType() : int
    {
        return $this->type;
    }

    public function setSubjectCategory(int $subjectCategory) : void
    {
        $this->subjectCategory = in_array($subjectCategory, self::SUBJECT_CATEGORY) 
        ? $subjectCategory 
        : self::SUBJECT_CATEGORY['NULL'];
    }

    public function getSubjectCategory() : int
    {
        return $this->subjectCategory;
    }
}