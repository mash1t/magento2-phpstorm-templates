<?php
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_php.php")

class ${NAME} extends \Magento\Ui\DataProvider\AbstractDataProvider
{
    /**
     * @var Collection
     */
    protected ${DS}collection;
    
    /**
     * @var FilterPool
     */
    protected ${DS}filterPool;

    /**
     * @var array
     */
    protected ${DS}loadedData;

    /**
     * Construct
     *
     * @param ${DS}name
     * @param ${DS}primaryFieldName
     * @param ${DS}requestFieldName
     * @param ${COLLECTION_MODEL} ${DS}collection
     * @param \Magento\Framework\View\Element\UiComponent\DataProvider\FilterPool ${DS}filterPool
     * @param array ${DS}meta
     * @param array ${DS}data
     */
    public function __construct(
        ${DS}name,
        ${DS}primaryFieldName,
        ${DS}requestFieldName,
        ${COLLECTION_MODEL} ${DS}collection,
        \Magento\Framework\View\Element\UiComponent\DataProvider\FilterPool ${DS}filterPool,
        array ${DS}meta = [],
        array ${DS}data = []
    ) {
        parent::__construct(${DS}name, ${DS}primaryFieldName, ${DS}requestFieldName, ${DS}meta, ${DS}data);
        ${DS}this->collection = ${DS}collection;
        ${DS}this->filterPool = ${DS}filterPool;
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        if (!${DS}this->loadedData) {
            ${DS}items = ${DS}this->collection->getItems();
            ${DS}result = array();
            foreach (${DS}items as ${DS}item) {
                ${DS}result['main_fieldset'] = ${DS}item->getData();
                ${DS}this->loadedData[${DS}item->getId()] = ${DS}result;
                break;
            }
        }
        return ${DS}this->loadedData;
    }

}