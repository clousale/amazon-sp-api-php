<?php
/**
 * AttributeSetListType.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Catalog;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * AttributeSetListType Class Doc Comment.
 *

 * @description The attributes of the item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class AttributeSetListType extends Categories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AttributeSetListType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'actor' => 'string[]',
'artist' => 'string[]',
'aspect_ratio' => 'string',
'audience_rating' => 'string',
'author' => 'string[]',
'back_finding' => 'string',
'band_material_type' => 'string',
'binding' => 'string',
'bluray_region' => 'string',
'brand' => 'string',
'cero_age_rating' => 'string',
'chain_type' => 'string',
'clasp_type' => 'string',
'color' => 'string',
'cpu_manufacturer' => 'string',
'cpu_speed' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'cpu_type' => 'string',
'creator' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\CreatorType[]',
'department' => 'string',
'director' => 'string[]',
'display_size' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'edition' => 'string',
'episode_sequence' => 'string',
'esrb_age_rating' => 'string',
'feature' => 'string[]',
'flavor' => 'string',
'format' => 'string[]',
'gem_type' => 'string[]',
'genre' => 'string',
'golf_club_flex' => 'string',
'golf_club_loft' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'hand_orientation' => 'string',
'hard_disk_interface' => 'string',
'hard_disk_size' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'hardware_platform' => 'string',
'hazardous_material_type' => 'string',
'item_dimensions' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DimensionType',
'is_adult_product' => 'bool',
'is_autographed' => 'bool',
'is_eligible_for_trade_in' => 'bool',
'is_memorabilia' => 'bool',
'issues_per_year' => 'string',
'item_part_number' => 'string',
'label' => 'string',
'languages' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\LanguageType[]',
'legal_disclaimer' => 'string',
'list_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\Price',
'manufacturer' => 'string',
'manufacturer_maximum_age' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'manufacturer_minimum_age' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'manufacturer_parts_warranty_description' => 'string',
'material_type' => 'string[]',
'maximum_resolution' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'media_type' => 'string[]',
'metal_stamp' => 'string',
'metal_type' => 'string',
'model' => 'string',
'number_of_discs' => 'int',
'number_of_issues' => 'int',
'number_of_items' => 'int',
'number_of_pages' => 'int',
'number_of_tracks' => 'int',
'operating_system' => 'string[]',
'optical_zoom' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'package_dimensions' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DimensionType',
'package_quantity' => 'int',
'part_number' => 'string',
'pegi_rating' => 'string',
'platform' => 'string[]',
'processor_count' => 'int',
'product_group' => 'string',
'product_type_name' => 'string',
'product_type_subcategory' => 'string',
'publication_date' => 'string',
'publisher' => 'string',
'region_code' => 'string',
'release_date' => 'string',
'ring_size' => 'string',
'running_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'shaft_material' => 'string',
'scent' => 'string',
'season_sequence' => 'string',
'seikodo_product_code' => 'string',
'size' => 'string',
'size_per_pearl' => 'string',
'small_image' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\Image',
'studio' => 'string',
'subscription_length' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'system_memory_size' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'system_memory_type' => 'string',
'theatrical_release_date' => 'string',
'title' => 'string',
'total_diamond_weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'total_gem_weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits',
'warranty' => 'string',
'weee_tax_value' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\Price',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'actor' => null,
'artist' => null,
'aspect_ratio' => null,
'audience_rating' => null,
'author' => null,
'back_finding' => null,
'band_material_type' => null,
'binding' => null,
'bluray_region' => null,
'brand' => null,
'cero_age_rating' => null,
'chain_type' => null,
'clasp_type' => null,
'color' => null,
'cpu_manufacturer' => null,
'cpu_speed' => null,
'cpu_type' => null,
'creator' => null,
'department' => null,
'director' => null,
'display_size' => null,
'edition' => null,
'episode_sequence' => null,
'esrb_age_rating' => null,
'feature' => null,
'flavor' => null,
'format' => null,
'gem_type' => null,
'genre' => null,
'golf_club_flex' => null,
'golf_club_loft' => null,
'hand_orientation' => null,
'hard_disk_interface' => null,
'hard_disk_size' => null,
'hardware_platform' => null,
'hazardous_material_type' => null,
'item_dimensions' => null,
'is_adult_product' => null,
'is_autographed' => null,
'is_eligible_for_trade_in' => null,
'is_memorabilia' => null,
'issues_per_year' => null,
'item_part_number' => null,
'label' => null,
'languages' => null,
'legal_disclaimer' => null,
'list_price' => null,
'manufacturer' => null,
'manufacturer_maximum_age' => null,
'manufacturer_minimum_age' => null,
'manufacturer_parts_warranty_description' => null,
'material_type' => null,
'maximum_resolution' => null,
'media_type' => null,
'metal_stamp' => null,
'metal_type' => null,
'model' => null,
'number_of_discs' => null,
'number_of_issues' => null,
'number_of_items' => null,
'number_of_pages' => null,
'number_of_tracks' => null,
'operating_system' => null,
'optical_zoom' => null,
'package_dimensions' => null,
'package_quantity' => null,
'part_number' => null,
'pegi_rating' => null,
'platform' => null,
'processor_count' => null,
'product_group' => null,
'product_type_name' => null,
'product_type_subcategory' => null,
'publication_date' => null,
'publisher' => null,
'region_code' => null,
'release_date' => null,
'ring_size' => null,
'running_time' => null,
'shaft_material' => null,
'scent' => null,
'season_sequence' => null,
'seikodo_product_code' => null,
'size' => null,
'size_per_pearl' => null,
'small_image' => null,
'studio' => null,
'subscription_length' => null,
'system_memory_size' => null,
'system_memory_type' => null,
'theatrical_release_date' => null,
'title' => null,
'total_diamond_weight' => null,
'total_gem_weight' => null,
'warranty' => null,
'weee_tax_value' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'actor' => 'Actor',
'artist' => 'Artist',
'aspect_ratio' => 'AspectRatio',
'audience_rating' => 'AudienceRating',
'author' => 'Author',
'back_finding' => 'BackFinding',
'band_material_type' => 'BandMaterialType',
'binding' => 'Binding',
'bluray_region' => 'BlurayRegion',
'brand' => 'Brand',
'cero_age_rating' => 'CeroAgeRating',
'chain_type' => 'ChainType',
'clasp_type' => 'ClaspType',
'color' => 'Color',
'cpu_manufacturer' => 'CpuManufacturer',
'cpu_speed' => 'CpuSpeed',
'cpu_type' => 'CpuType',
'creator' => 'Creator',
'department' => 'Department',
'director' => 'Director',
'display_size' => 'DisplaySize',
'edition' => 'Edition',
'episode_sequence' => 'EpisodeSequence',
'esrb_age_rating' => 'EsrbAgeRating',
'feature' => 'Feature',
'flavor' => 'Flavor',
'format' => 'Format',
'gem_type' => 'GemType',
'genre' => 'Genre',
'golf_club_flex' => 'GolfClubFlex',
'golf_club_loft' => 'GolfClubLoft',
'hand_orientation' => 'HandOrientation',
'hard_disk_interface' => 'HardDiskInterface',
'hard_disk_size' => 'HardDiskSize',
'hardware_platform' => 'HardwarePlatform',
'hazardous_material_type' => 'HazardousMaterialType',
'item_dimensions' => 'ItemDimensions',
'is_adult_product' => 'IsAdultProduct',
'is_autographed' => 'IsAutographed',
'is_eligible_for_trade_in' => 'IsEligibleForTradeIn',
'is_memorabilia' => 'IsMemorabilia',
'issues_per_year' => 'IssuesPerYear',
'item_part_number' => 'ItemPartNumber',
'label' => 'Label',
'languages' => 'Languages',
'legal_disclaimer' => 'LegalDisclaimer',
'list_price' => 'ListPrice',
'manufacturer' => 'Manufacturer',
'manufacturer_maximum_age' => 'ManufacturerMaximumAge',
'manufacturer_minimum_age' => 'ManufacturerMinimumAge',
'manufacturer_parts_warranty_description' => 'ManufacturerPartsWarrantyDescription',
'material_type' => 'MaterialType',
'maximum_resolution' => 'MaximumResolution',
'media_type' => 'MediaType',
'metal_stamp' => 'MetalStamp',
'metal_type' => 'MetalType',
'model' => 'Model',
'number_of_discs' => 'NumberOfDiscs',
'number_of_issues' => 'NumberOfIssues',
'number_of_items' => 'NumberOfItems',
'number_of_pages' => 'NumberOfPages',
'number_of_tracks' => 'NumberOfTracks',
'operating_system' => 'OperatingSystem',
'optical_zoom' => 'OpticalZoom',
'package_dimensions' => 'PackageDimensions',
'package_quantity' => 'PackageQuantity',
'part_number' => 'PartNumber',
'pegi_rating' => 'PegiRating',
'platform' => 'Platform',
'processor_count' => 'ProcessorCount',
'product_group' => 'ProductGroup',
'product_type_name' => 'ProductTypeName',
'product_type_subcategory' => 'ProductTypeSubcategory',
'publication_date' => 'PublicationDate',
'publisher' => 'Publisher',
'region_code' => 'RegionCode',
'release_date' => 'ReleaseDate',
'ring_size' => 'RingSize',
'running_time' => 'RunningTime',
'shaft_material' => 'ShaftMaterial',
'scent' => 'Scent',
'season_sequence' => 'SeasonSequence',
'seikodo_product_code' => 'SeikodoProductCode',
'size' => 'Size',
'size_per_pearl' => 'SizePerPearl',
'small_image' => 'SmallImage',
'studio' => 'Studio',
'subscription_length' => 'SubscriptionLength',
'system_memory_size' => 'SystemMemorySize',
'system_memory_type' => 'SystemMemoryType',
'theatrical_release_date' => 'TheatricalReleaseDate',
'title' => 'Title',
'total_diamond_weight' => 'TotalDiamondWeight',
'total_gem_weight' => 'TotalGemWeight',
'warranty' => 'Warranty',
'weee_tax_value' => 'WeeeTaxValue',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'actor' => 'setActor',
'artist' => 'setArtist',
'aspect_ratio' => 'setAspectRatio',
'audience_rating' => 'setAudienceRating',
'author' => 'setAuthor',
'back_finding' => 'setBackFinding',
'band_material_type' => 'setBandMaterialType',
'binding' => 'setBinding',
'bluray_region' => 'setBlurayRegion',
'brand' => 'setBrand',
'cero_age_rating' => 'setCeroAgeRating',
'chain_type' => 'setChainType',
'clasp_type' => 'setClaspType',
'color' => 'setColor',
'cpu_manufacturer' => 'setCpuManufacturer',
'cpu_speed' => 'setCpuSpeed',
'cpu_type' => 'setCpuType',
'creator' => 'setCreator',
'department' => 'setDepartment',
'director' => 'setDirector',
'display_size' => 'setDisplaySize',
'edition' => 'setEdition',
'episode_sequence' => 'setEpisodeSequence',
'esrb_age_rating' => 'setEsrbAgeRating',
'feature' => 'setFeature',
'flavor' => 'setFlavor',
'format' => 'setFormat',
'gem_type' => 'setGemType',
'genre' => 'setGenre',
'golf_club_flex' => 'setGolfClubFlex',
'golf_club_loft' => 'setGolfClubLoft',
'hand_orientation' => 'setHandOrientation',
'hard_disk_interface' => 'setHardDiskInterface',
'hard_disk_size' => 'setHardDiskSize',
'hardware_platform' => 'setHardwarePlatform',
'hazardous_material_type' => 'setHazardousMaterialType',
'item_dimensions' => 'setItemDimensions',
'is_adult_product' => 'setIsAdultProduct',
'is_autographed' => 'setIsAutographed',
'is_eligible_for_trade_in' => 'setIsEligibleForTradeIn',
'is_memorabilia' => 'setIsMemorabilia',
'issues_per_year' => 'setIssuesPerYear',
'item_part_number' => 'setItemPartNumber',
'label' => 'setLabel',
'languages' => 'setLanguages',
'legal_disclaimer' => 'setLegalDisclaimer',
'list_price' => 'setListPrice',
'manufacturer' => 'setManufacturer',
'manufacturer_maximum_age' => 'setManufacturerMaximumAge',
'manufacturer_minimum_age' => 'setManufacturerMinimumAge',
'manufacturer_parts_warranty_description' => 'setManufacturerPartsWarrantyDescription',
'material_type' => 'setMaterialType',
'maximum_resolution' => 'setMaximumResolution',
'media_type' => 'setMediaType',
'metal_stamp' => 'setMetalStamp',
'metal_type' => 'setMetalType',
'model' => 'setModel',
'number_of_discs' => 'setNumberOfDiscs',
'number_of_issues' => 'setNumberOfIssues',
'number_of_items' => 'setNumberOfItems',
'number_of_pages' => 'setNumberOfPages',
'number_of_tracks' => 'setNumberOfTracks',
'operating_system' => 'setOperatingSystem',
'optical_zoom' => 'setOpticalZoom',
'package_dimensions' => 'setPackageDimensions',
'package_quantity' => 'setPackageQuantity',
'part_number' => 'setPartNumber',
'pegi_rating' => 'setPegiRating',
'platform' => 'setPlatform',
'processor_count' => 'setProcessorCount',
'product_group' => 'setProductGroup',
'product_type_name' => 'setProductTypeName',
'product_type_subcategory' => 'setProductTypeSubcategory',
'publication_date' => 'setPublicationDate',
'publisher' => 'setPublisher',
'region_code' => 'setRegionCode',
'release_date' => 'setReleaseDate',
'ring_size' => 'setRingSize',
'running_time' => 'setRunningTime',
'shaft_material' => 'setShaftMaterial',
'scent' => 'setScent',
'season_sequence' => 'setSeasonSequence',
'seikodo_product_code' => 'setSeikodoProductCode',
'size' => 'setSize',
'size_per_pearl' => 'setSizePerPearl',
'small_image' => 'setSmallImage',
'studio' => 'setStudio',
'subscription_length' => 'setSubscriptionLength',
'system_memory_size' => 'setSystemMemorySize',
'system_memory_type' => 'setSystemMemoryType',
'theatrical_release_date' => 'setTheatricalReleaseDate',
'title' => 'setTitle',
'total_diamond_weight' => 'setTotalDiamondWeight',
'total_gem_weight' => 'setTotalGemWeight',
'warranty' => 'setWarranty',
'weee_tax_value' => 'setWeeeTaxValue',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'actor' => 'getActor',
'artist' => 'getArtist',
'aspect_ratio' => 'getAspectRatio',
'audience_rating' => 'getAudienceRating',
'author' => 'getAuthor',
'back_finding' => 'getBackFinding',
'band_material_type' => 'getBandMaterialType',
'binding' => 'getBinding',
'bluray_region' => 'getBlurayRegion',
'brand' => 'getBrand',
'cero_age_rating' => 'getCeroAgeRating',
'chain_type' => 'getChainType',
'clasp_type' => 'getClaspType',
'color' => 'getColor',
'cpu_manufacturer' => 'getCpuManufacturer',
'cpu_speed' => 'getCpuSpeed',
'cpu_type' => 'getCpuType',
'creator' => 'getCreator',
'department' => 'getDepartment',
'director' => 'getDirector',
'display_size' => 'getDisplaySize',
'edition' => 'getEdition',
'episode_sequence' => 'getEpisodeSequence',
'esrb_age_rating' => 'getEsrbAgeRating',
'feature' => 'getFeature',
'flavor' => 'getFlavor',
'format' => 'getFormat',
'gem_type' => 'getGemType',
'genre' => 'getGenre',
'golf_club_flex' => 'getGolfClubFlex',
'golf_club_loft' => 'getGolfClubLoft',
'hand_orientation' => 'getHandOrientation',
'hard_disk_interface' => 'getHardDiskInterface',
'hard_disk_size' => 'getHardDiskSize',
'hardware_platform' => 'getHardwarePlatform',
'hazardous_material_type' => 'getHazardousMaterialType',
'item_dimensions' => 'getItemDimensions',
'is_adult_product' => 'getIsAdultProduct',
'is_autographed' => 'getIsAutographed',
'is_eligible_for_trade_in' => 'getIsEligibleForTradeIn',
'is_memorabilia' => 'getIsMemorabilia',
'issues_per_year' => 'getIssuesPerYear',
'item_part_number' => 'getItemPartNumber',
'label' => 'getLabel',
'languages' => 'getLanguages',
'legal_disclaimer' => 'getLegalDisclaimer',
'list_price' => 'getListPrice',
'manufacturer' => 'getManufacturer',
'manufacturer_maximum_age' => 'getManufacturerMaximumAge',
'manufacturer_minimum_age' => 'getManufacturerMinimumAge',
'manufacturer_parts_warranty_description' => 'getManufacturerPartsWarrantyDescription',
'material_type' => 'getMaterialType',
'maximum_resolution' => 'getMaximumResolution',
'media_type' => 'getMediaType',
'metal_stamp' => 'getMetalStamp',
'metal_type' => 'getMetalType',
'model' => 'getModel',
'number_of_discs' => 'getNumberOfDiscs',
'number_of_issues' => 'getNumberOfIssues',
'number_of_items' => 'getNumberOfItems',
'number_of_pages' => 'getNumberOfPages',
'number_of_tracks' => 'getNumberOfTracks',
'operating_system' => 'getOperatingSystem',
'optical_zoom' => 'getOpticalZoom',
'package_dimensions' => 'getPackageDimensions',
'package_quantity' => 'getPackageQuantity',
'part_number' => 'getPartNumber',
'pegi_rating' => 'getPegiRating',
'platform' => 'getPlatform',
'processor_count' => 'getProcessorCount',
'product_group' => 'getProductGroup',
'product_type_name' => 'getProductTypeName',
'product_type_subcategory' => 'getProductTypeSubcategory',
'publication_date' => 'getPublicationDate',
'publisher' => 'getPublisher',
'region_code' => 'getRegionCode',
'release_date' => 'getReleaseDate',
'ring_size' => 'getRingSize',
'running_time' => 'getRunningTime',
'shaft_material' => 'getShaftMaterial',
'scent' => 'getScent',
'season_sequence' => 'getSeasonSequence',
'seikodo_product_code' => 'getSeikodoProductCode',
'size' => 'getSize',
'size_per_pearl' => 'getSizePerPearl',
'small_image' => 'getSmallImage',
'studio' => 'getStudio',
'subscription_length' => 'getSubscriptionLength',
'system_memory_size' => 'getSystemMemorySize',
'system_memory_type' => 'getSystemMemoryType',
'theatrical_release_date' => 'getTheatricalReleaseDate',
'title' => 'getTitle',
'total_diamond_weight' => 'getTotalDiamondWeight',
'total_gem_weight' => 'getTotalGemWeight',
'warranty' => 'getWarranty',
'weee_tax_value' => 'getWeeeTaxValue',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['actor'] = isset($data['actor']) ? $data['actor'] : null;
        $this->container['artist'] = isset($data['artist']) ? $data['artist'] : null;
        $this->container['aspect_ratio'] = isset($data['aspect_ratio']) ? $data['aspect_ratio'] : null;
        $this->container['audience_rating'] = isset($data['audience_rating']) ? $data['audience_rating'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['back_finding'] = isset($data['back_finding']) ? $data['back_finding'] : null;
        $this->container['band_material_type'] = isset($data['band_material_type']) ? $data['band_material_type'] : null;
        $this->container['binding'] = isset($data['binding']) ? $data['binding'] : null;
        $this->container['bluray_region'] = isset($data['bluray_region']) ? $data['bluray_region'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['cero_age_rating'] = isset($data['cero_age_rating']) ? $data['cero_age_rating'] : null;
        $this->container['chain_type'] = isset($data['chain_type']) ? $data['chain_type'] : null;
        $this->container['clasp_type'] = isset($data['clasp_type']) ? $data['clasp_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['cpu_manufacturer'] = isset($data['cpu_manufacturer']) ? $data['cpu_manufacturer'] : null;
        $this->container['cpu_speed'] = isset($data['cpu_speed']) ? $data['cpu_speed'] : null;
        $this->container['cpu_type'] = isset($data['cpu_type']) ? $data['cpu_type'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['director'] = isset($data['director']) ? $data['director'] : null;
        $this->container['display_size'] = isset($data['display_size']) ? $data['display_size'] : null;
        $this->container['edition'] = isset($data['edition']) ? $data['edition'] : null;
        $this->container['episode_sequence'] = isset($data['episode_sequence']) ? $data['episode_sequence'] : null;
        $this->container['esrb_age_rating'] = isset($data['esrb_age_rating']) ? $data['esrb_age_rating'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['gem_type'] = isset($data['gem_type']) ? $data['gem_type'] : null;
        $this->container['genre'] = isset($data['genre']) ? $data['genre'] : null;
        $this->container['golf_club_flex'] = isset($data['golf_club_flex']) ? $data['golf_club_flex'] : null;
        $this->container['golf_club_loft'] = isset($data['golf_club_loft']) ? $data['golf_club_loft'] : null;
        $this->container['hand_orientation'] = isset($data['hand_orientation']) ? $data['hand_orientation'] : null;
        $this->container['hard_disk_interface'] = isset($data['hard_disk_interface']) ? $data['hard_disk_interface'] : null;
        $this->container['hard_disk_size'] = isset($data['hard_disk_size']) ? $data['hard_disk_size'] : null;
        $this->container['hardware_platform'] = isset($data['hardware_platform']) ? $data['hardware_platform'] : null;
        $this->container['hazardous_material_type'] = isset($data['hazardous_material_type']) ? $data['hazardous_material_type'] : null;
        $this->container['item_dimensions'] = isset($data['item_dimensions']) ? $data['item_dimensions'] : null;
        $this->container['is_adult_product'] = isset($data['is_adult_product']) ? $data['is_adult_product'] : null;
        $this->container['is_autographed'] = isset($data['is_autographed']) ? $data['is_autographed'] : null;
        $this->container['is_eligible_for_trade_in'] = isset($data['is_eligible_for_trade_in']) ? $data['is_eligible_for_trade_in'] : null;
        $this->container['is_memorabilia'] = isset($data['is_memorabilia']) ? $data['is_memorabilia'] : null;
        $this->container['issues_per_year'] = isset($data['issues_per_year']) ? $data['issues_per_year'] : null;
        $this->container['item_part_number'] = isset($data['item_part_number']) ? $data['item_part_number'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['legal_disclaimer'] = isset($data['legal_disclaimer']) ? $data['legal_disclaimer'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['manufacturer_maximum_age'] = isset($data['manufacturer_maximum_age']) ? $data['manufacturer_maximum_age'] : null;
        $this->container['manufacturer_minimum_age'] = isset($data['manufacturer_minimum_age']) ? $data['manufacturer_minimum_age'] : null;
        $this->container['manufacturer_parts_warranty_description'] = isset($data['manufacturer_parts_warranty_description']) ? $data['manufacturer_parts_warranty_description'] : null;
        $this->container['material_type'] = isset($data['material_type']) ? $data['material_type'] : null;
        $this->container['maximum_resolution'] = isset($data['maximum_resolution']) ? $data['maximum_resolution'] : null;
        $this->container['media_type'] = isset($data['media_type']) ? $data['media_type'] : null;
        $this->container['metal_stamp'] = isset($data['metal_stamp']) ? $data['metal_stamp'] : null;
        $this->container['metal_type'] = isset($data['metal_type']) ? $data['metal_type'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['number_of_discs'] = isset($data['number_of_discs']) ? $data['number_of_discs'] : null;
        $this->container['number_of_issues'] = isset($data['number_of_issues']) ? $data['number_of_issues'] : null;
        $this->container['number_of_items'] = isset($data['number_of_items']) ? $data['number_of_items'] : null;
        $this->container['number_of_pages'] = isset($data['number_of_pages']) ? $data['number_of_pages'] : null;
        $this->container['number_of_tracks'] = isset($data['number_of_tracks']) ? $data['number_of_tracks'] : null;
        $this->container['operating_system'] = isset($data['operating_system']) ? $data['operating_system'] : null;
        $this->container['optical_zoom'] = isset($data['optical_zoom']) ? $data['optical_zoom'] : null;
        $this->container['package_dimensions'] = isset($data['package_dimensions']) ? $data['package_dimensions'] : null;
        $this->container['package_quantity'] = isset($data['package_quantity']) ? $data['package_quantity'] : null;
        $this->container['part_number'] = isset($data['part_number']) ? $data['part_number'] : null;
        $this->container['pegi_rating'] = isset($data['pegi_rating']) ? $data['pegi_rating'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['processor_count'] = isset($data['processor_count']) ? $data['processor_count'] : null;
        $this->container['product_group'] = isset($data['product_group']) ? $data['product_group'] : null;
        $this->container['product_type_name'] = isset($data['product_type_name']) ? $data['product_type_name'] : null;
        $this->container['product_type_subcategory'] = isset($data['product_type_subcategory']) ? $data['product_type_subcategory'] : null;
        $this->container['publication_date'] = isset($data['publication_date']) ? $data['publication_date'] : null;
        $this->container['publisher'] = isset($data['publisher']) ? $data['publisher'] : null;
        $this->container['region_code'] = isset($data['region_code']) ? $data['region_code'] : null;
        $this->container['release_date'] = isset($data['release_date']) ? $data['release_date'] : null;
        $this->container['ring_size'] = isset($data['ring_size']) ? $data['ring_size'] : null;
        $this->container['running_time'] = isset($data['running_time']) ? $data['running_time'] : null;
        $this->container['shaft_material'] = isset($data['shaft_material']) ? $data['shaft_material'] : null;
        $this->container['scent'] = isset($data['scent']) ? $data['scent'] : null;
        $this->container['season_sequence'] = isset($data['season_sequence']) ? $data['season_sequence'] : null;
        $this->container['seikodo_product_code'] = isset($data['seikodo_product_code']) ? $data['seikodo_product_code'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['size_per_pearl'] = isset($data['size_per_pearl']) ? $data['size_per_pearl'] : null;
        $this->container['small_image'] = isset($data['small_image']) ? $data['small_image'] : null;
        $this->container['studio'] = isset($data['studio']) ? $data['studio'] : null;
        $this->container['subscription_length'] = isset($data['subscription_length']) ? $data['subscription_length'] : null;
        $this->container['system_memory_size'] = isset($data['system_memory_size']) ? $data['system_memory_size'] : null;
        $this->container['system_memory_type'] = isset($data['system_memory_type']) ? $data['system_memory_type'] : null;
        $this->container['theatrical_release_date'] = isset($data['theatrical_release_date']) ? $data['theatrical_release_date'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['total_diamond_weight'] = isset($data['total_diamond_weight']) ? $data['total_diamond_weight'] : null;
        $this->container['total_gem_weight'] = isset($data['total_gem_weight']) ? $data['total_gem_weight'] : null;
        $this->container['warranty'] = isset($data['warranty']) ? $data['warranty'] : null;
        $this->container['weee_tax_value'] = isset($data['weee_tax_value']) ? $data['weee_tax_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets actor.
     *
     * @return string[]
     */
    public function getActor()
    {
        return $this->container['actor'];
    }

    /**
     * Sets actor.
     *
     * @param string[] $actor the actor attributes of the item
     *
     * @return $this
     */
    public function setActor($actor)
    {
        $this->container['actor'] = $actor;

        return $this;
    }

    /**
     * Gets artist.
     *
     * @return string[]
     */
    public function getArtist()
    {
        return $this->container['artist'];
    }

    /**
     * Sets artist.
     *
     * @param string[] $artist the artist attributes of the item
     *
     * @return $this
     */
    public function setArtist($artist)
    {
        $this->container['artist'] = $artist;

        return $this;
    }

    /**
     * Gets aspect_ratio.
     *
     * @return string
     */
    public function getAspectRatio()
    {
        return $this->container['aspect_ratio'];
    }

    /**
     * Sets aspect_ratio.
     *
     * @param string $aspect_ratio the aspect ratio attribute of the item
     *
     * @return $this
     */
    public function setAspectRatio($aspect_ratio)
    {
        $this->container['aspect_ratio'] = $aspect_ratio;

        return $this;
    }

    /**
     * Gets audience_rating.
     *
     * @return string
     */
    public function getAudienceRating()
    {
        return $this->container['audience_rating'];
    }

    /**
     * Sets audience_rating.
     *
     * @param string $audience_rating the audience rating attribute of the item
     *
     * @return $this
     */
    public function setAudienceRating($audience_rating)
    {
        $this->container['audience_rating'] = $audience_rating;

        return $this;
    }

    /**
     * Gets author.
     *
     * @return string[]
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author.
     *
     * @param string[] $author the author attributes of the item
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets back_finding.
     *
     * @return string
     */
    public function getBackFinding()
    {
        return $this->container['back_finding'];
    }

    /**
     * Sets back_finding.
     *
     * @param string $back_finding the back finding attribute of the item
     *
     * @return $this
     */
    public function setBackFinding($back_finding)
    {
        $this->container['back_finding'] = $back_finding;

        return $this;
    }

    /**
     * Gets band_material_type.
     *
     * @return string
     */
    public function getBandMaterialType()
    {
        return $this->container['band_material_type'];
    }

    /**
     * Sets band_material_type.
     *
     * @param string $band_material_type the band material type attribute of the item
     *
     * @return $this
     */
    public function setBandMaterialType($band_material_type)
    {
        $this->container['band_material_type'] = $band_material_type;

        return $this;
    }

    /**
     * Gets binding.
     *
     * @return string
     */
    public function getBinding()
    {
        return $this->container['binding'];
    }

    /**
     * Sets binding.
     *
     * @param string $binding the binding attribute of the item
     *
     * @return $this
     */
    public function setBinding($binding)
    {
        $this->container['binding'] = $binding;

        return $this;
    }

    /**
     * Gets bluray_region.
     *
     * @return string
     */
    public function getBlurayRegion()
    {
        return $this->container['bluray_region'];
    }

    /**
     * Sets bluray_region.
     *
     * @param string $bluray_region the Bluray region attribute of the item
     *
     * @return $this
     */
    public function setBlurayRegion($bluray_region)
    {
        $this->container['bluray_region'] = $bluray_region;

        return $this;
    }

    /**
     * Gets brand.
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand.
     *
     * @param string $brand the brand attribute of the item
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets cero_age_rating.
     *
     * @return string
     */
    public function getCeroAgeRating()
    {
        return $this->container['cero_age_rating'];
    }

    /**
     * Sets cero_age_rating.
     *
     * @param string $cero_age_rating the CERO age rating attribute of the item
     *
     * @return $this
     */
    public function setCeroAgeRating($cero_age_rating)
    {
        $this->container['cero_age_rating'] = $cero_age_rating;

        return $this;
    }

    /**
     * Gets chain_type.
     *
     * @return string
     */
    public function getChainType()
    {
        return $this->container['chain_type'];
    }

    /**
     * Sets chain_type.
     *
     * @param string $chain_type the chain type attribute of the item
     *
     * @return $this
     */
    public function setChainType($chain_type)
    {
        $this->container['chain_type'] = $chain_type;

        return $this;
    }

    /**
     * Gets clasp_type.
     *
     * @return string
     */
    public function getClaspType()
    {
        return $this->container['clasp_type'];
    }

    /**
     * Sets clasp_type.
     *
     * @param string $clasp_type the clasp type attribute of the item
     *
     * @return $this
     */
    public function setClaspType($clasp_type)
    {
        $this->container['clasp_type'] = $clasp_type;

        return $this;
    }

    /**
     * Gets color.
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color.
     *
     * @param string $color the color attribute of the item
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets cpu_manufacturer.
     *
     * @return string
     */
    public function getCpuManufacturer()
    {
        return $this->container['cpu_manufacturer'];
    }

    /**
     * Sets cpu_manufacturer.
     *
     * @param string $cpu_manufacturer the CPU manufacturer attribute of the item
     *
     * @return $this
     */
    public function setCpuManufacturer($cpu_manufacturer)
    {
        $this->container['cpu_manufacturer'] = $cpu_manufacturer;

        return $this;
    }

    /**
     * Gets cpu_speed.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getCpuSpeed()
    {
        return $this->container['cpu_speed'];
    }

    /**
     * Sets cpu_speed.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $cpu_speed cpu_speed
     *
     * @return $this
     */
    public function setCpuSpeed($cpu_speed)
    {
        $this->container['cpu_speed'] = $cpu_speed;

        return $this;
    }

    /**
     * Gets cpu_type.
     *
     * @return string
     */
    public function getCpuType()
    {
        return $this->container['cpu_type'];
    }

    /**
     * Sets cpu_type.
     *
     * @param string $cpu_type the CPU type attribute of the item
     *
     * @return $this
     */
    public function setCpuType($cpu_type)
    {
        $this->container['cpu_type'] = $cpu_type;

        return $this;
    }

    /**
     * Gets creator.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\CreatorType[]
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\CreatorType[] $creator the creator attributes of the item
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets department.
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department.
     *
     * @param string $department the department attribute of the item
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets director.
     *
     * @return string[]
     */
    public function getDirector()
    {
        return $this->container['director'];
    }

    /**
     * Sets director.
     *
     * @param string[] $director the director attributes of the item
     *
     * @return $this
     */
    public function setDirector($director)
    {
        $this->container['director'] = $director;

        return $this;
    }

    /**
     * Gets display_size.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getDisplaySize()
    {
        return $this->container['display_size'];
    }

    /**
     * Sets display_size.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $display_size display_size
     *
     * @return $this
     */
    public function setDisplaySize($display_size)
    {
        $this->container['display_size'] = $display_size;

        return $this;
    }

    /**
     * Gets edition.
     *
     * @return string
     */
    public function getEdition()
    {
        return $this->container['edition'];
    }

    /**
     * Sets edition.
     *
     * @param string $edition the edition attribute of the item
     *
     * @return $this
     */
    public function setEdition($edition)
    {
        $this->container['edition'] = $edition;

        return $this;
    }

    /**
     * Gets episode_sequence.
     *
     * @return string
     */
    public function getEpisodeSequence()
    {
        return $this->container['episode_sequence'];
    }

    /**
     * Sets episode_sequence.
     *
     * @param string $episode_sequence the episode sequence attribute of the item
     *
     * @return $this
     */
    public function setEpisodeSequence($episode_sequence)
    {
        $this->container['episode_sequence'] = $episode_sequence;

        return $this;
    }

    /**
     * Gets esrb_age_rating.
     *
     * @return string
     */
    public function getEsrbAgeRating()
    {
        return $this->container['esrb_age_rating'];
    }

    /**
     * Sets esrb_age_rating.
     *
     * @param string $esrb_age_rating the ESRB age rating attribute of the item
     *
     * @return $this
     */
    public function setEsrbAgeRating($esrb_age_rating)
    {
        $this->container['esrb_age_rating'] = $esrb_age_rating;

        return $this;
    }

    /**
     * Gets feature.
     *
     * @return string[]
     */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
     * Sets feature.
     *
     * @param string[] $feature The feature attributes of the item
     *
     * @return $this
     */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;

        return $this;
    }

    /**
     * Gets flavor.
     *
     * @return string
     */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
     * Sets flavor.
     *
     * @param string $flavor the flavor attribute of the item
     *
     * @return $this
     */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;

        return $this;
    }

    /**
     * Gets format.
     *
     * @return string[]
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format.
     *
     * @param string[] $format the format attributes of the item
     *
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets gem_type.
     *
     * @return string[]
     */
    public function getGemType()
    {
        return $this->container['gem_type'];
    }

    /**
     * Sets gem_type.
     *
     * @param string[] $gem_type the gem type attributes of the item
     *
     * @return $this
     */
    public function setGemType($gem_type)
    {
        $this->container['gem_type'] = $gem_type;

        return $this;
    }

    /**
     * Gets genre.
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->container['genre'];
    }

    /**
     * Sets genre.
     *
     * @param string $genre the genre attribute of the item
     *
     * @return $this
     */
    public function setGenre($genre)
    {
        $this->container['genre'] = $genre;

        return $this;
    }

    /**
     * Gets golf_club_flex.
     *
     * @return string
     */
    public function getGolfClubFlex()
    {
        return $this->container['golf_club_flex'];
    }

    /**
     * Sets golf_club_flex.
     *
     * @param string $golf_club_flex the golf club flex attribute of the item
     *
     * @return $this
     */
    public function setGolfClubFlex($golf_club_flex)
    {
        $this->container['golf_club_flex'] = $golf_club_flex;

        return $this;
    }

    /**
     * Gets golf_club_loft.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getGolfClubLoft()
    {
        return $this->container['golf_club_loft'];
    }

    /**
     * Sets golf_club_loft.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $golf_club_loft golf_club_loft
     *
     * @return $this
     */
    public function setGolfClubLoft($golf_club_loft)
    {
        $this->container['golf_club_loft'] = $golf_club_loft;

        return $this;
    }

    /**
     * Gets hand_orientation.
     *
     * @return string
     */
    public function getHandOrientation()
    {
        return $this->container['hand_orientation'];
    }

    /**
     * Sets hand_orientation.
     *
     * @param string $hand_orientation the hand orientation attribute of the item
     *
     * @return $this
     */
    public function setHandOrientation($hand_orientation)
    {
        $this->container['hand_orientation'] = $hand_orientation;

        return $this;
    }

    /**
     * Gets hard_disk_interface.
     *
     * @return string
     */
    public function getHardDiskInterface()
    {
        return $this->container['hard_disk_interface'];
    }

    /**
     * Sets hard_disk_interface.
     *
     * @param string $hard_disk_interface the hard disk interface attribute of the item
     *
     * @return $this
     */
    public function setHardDiskInterface($hard_disk_interface)
    {
        $this->container['hard_disk_interface'] = $hard_disk_interface;

        return $this;
    }

    /**
     * Gets hard_disk_size.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getHardDiskSize()
    {
        return $this->container['hard_disk_size'];
    }

    /**
     * Sets hard_disk_size.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $hard_disk_size hard_disk_size
     *
     * @return $this
     */
    public function setHardDiskSize($hard_disk_size)
    {
        $this->container['hard_disk_size'] = $hard_disk_size;

        return $this;
    }

    /**
     * Gets hardware_platform.
     *
     * @return string
     */
    public function getHardwarePlatform()
    {
        return $this->container['hardware_platform'];
    }

    /**
     * Sets hardware_platform.
     *
     * @param string $hardware_platform the hardware platform attribute of the item
     *
     * @return $this
     */
    public function setHardwarePlatform($hardware_platform)
    {
        $this->container['hardware_platform'] = $hardware_platform;

        return $this;
    }

    /**
     * Gets hazardous_material_type.
     *
     * @return string
     */
    public function getHazardousMaterialType()
    {
        return $this->container['hazardous_material_type'];
    }

    /**
     * Sets hazardous_material_type.
     *
     * @param string $hazardous_material_type the hazardous material type attribute of the item
     *
     * @return $this
     */
    public function setHazardousMaterialType($hazardous_material_type)
    {
        $this->container['hazardous_material_type'] = $hazardous_material_type;

        return $this;
    }

    /**
     * Gets item_dimensions.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DimensionType
     */
    public function getItemDimensions()
    {
        return $this->container['item_dimensions'];
    }

    /**
     * Sets item_dimensions.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DimensionType $item_dimensions item_dimensions
     *
     * @return $this
     */
    public function setItemDimensions($item_dimensions)
    {
        $this->container['item_dimensions'] = $item_dimensions;

        return $this;
    }

    /**
     * Gets is_adult_product.
     *
     * @return bool
     */
    public function getIsAdultProduct()
    {
        return $this->container['is_adult_product'];
    }

    /**
     * Sets is_adult_product.
     *
     * @param bool $is_adult_product the adult product attribute of the item
     *
     * @return $this
     */
    public function setIsAdultProduct($is_adult_product)
    {
        $this->container['is_adult_product'] = $is_adult_product;

        return $this;
    }

    /**
     * Gets is_autographed.
     *
     * @return bool
     */
    public function getIsAutographed()
    {
        return $this->container['is_autographed'];
    }

    /**
     * Sets is_autographed.
     *
     * @param bool $is_autographed the autographed attribute of the item
     *
     * @return $this
     */
    public function setIsAutographed($is_autographed)
    {
        $this->container['is_autographed'] = $is_autographed;

        return $this;
    }

    /**
     * Gets is_eligible_for_trade_in.
     *
     * @return bool
     */
    public function getIsEligibleForTradeIn()
    {
        return $this->container['is_eligible_for_trade_in'];
    }

    /**
     * Sets is_eligible_for_trade_in.
     *
     * @param bool $is_eligible_for_trade_in the is eligible for trade in attribute of the item
     *
     * @return $this
     */
    public function setIsEligibleForTradeIn($is_eligible_for_trade_in)
    {
        $this->container['is_eligible_for_trade_in'] = $is_eligible_for_trade_in;

        return $this;
    }

    /**
     * Gets is_memorabilia.
     *
     * @return bool
     */
    public function getIsMemorabilia()
    {
        return $this->container['is_memorabilia'];
    }

    /**
     * Sets is_memorabilia.
     *
     * @param bool $is_memorabilia the is memorabilia attribute of the item
     *
     * @return $this
     */
    public function setIsMemorabilia($is_memorabilia)
    {
        $this->container['is_memorabilia'] = $is_memorabilia;

        return $this;
    }

    /**
     * Gets issues_per_year.
     *
     * @return string
     */
    public function getIssuesPerYear()
    {
        return $this->container['issues_per_year'];
    }

    /**
     * Sets issues_per_year.
     *
     * @param string $issues_per_year the issues per year attribute of the item
     *
     * @return $this
     */
    public function setIssuesPerYear($issues_per_year)
    {
        $this->container['issues_per_year'] = $issues_per_year;

        return $this;
    }

    /**
     * Gets item_part_number.
     *
     * @return string
     */
    public function getItemPartNumber()
    {
        return $this->container['item_part_number'];
    }

    /**
     * Sets item_part_number.
     *
     * @param string $item_part_number the item part number attribute of the item
     *
     * @return $this
     */
    public function setItemPartNumber($item_part_number)
    {
        $this->container['item_part_number'] = $item_part_number;

        return $this;
    }

    /**
     * Gets label.
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label.
     *
     * @param string $label the label attribute of the item
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets languages.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\LanguageType[]
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\LanguageType[] $languages the languages attribute of the item
     *
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets legal_disclaimer.
     *
     * @return string
     */
    public function getLegalDisclaimer()
    {
        return $this->container['legal_disclaimer'];
    }

    /**
     * Sets legal_disclaimer.
     *
     * @param string $legal_disclaimer the legal disclaimer attribute of the item
     *
     * @return $this
     */
    public function setLegalDisclaimer($legal_disclaimer)
    {
        $this->container['legal_disclaimer'] = $legal_disclaimer;

        return $this;
    }

    /**
     * Gets list_price.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\Price
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\Price $list_price list_price
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets manufacturer.
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer.
     *
     * @param string $manufacturer the manufacturer attribute of the item
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets manufacturer_maximum_age.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getManufacturerMaximumAge()
    {
        return $this->container['manufacturer_maximum_age'];
    }

    /**
     * Sets manufacturer_maximum_age.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $manufacturer_maximum_age manufacturer_maximum_age
     *
     * @return $this
     */
    public function setManufacturerMaximumAge($manufacturer_maximum_age)
    {
        $this->container['manufacturer_maximum_age'] = $manufacturer_maximum_age;

        return $this;
    }

    /**
     * Gets manufacturer_minimum_age.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getManufacturerMinimumAge()
    {
        return $this->container['manufacturer_minimum_age'];
    }

    /**
     * Sets manufacturer_minimum_age.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $manufacturer_minimum_age manufacturer_minimum_age
     *
     * @return $this
     */
    public function setManufacturerMinimumAge($manufacturer_minimum_age)
    {
        $this->container['manufacturer_minimum_age'] = $manufacturer_minimum_age;

        return $this;
    }

    /**
     * Gets manufacturer_parts_warranty_description.
     *
     * @return string
     */
    public function getManufacturerPartsWarrantyDescription()
    {
        return $this->container['manufacturer_parts_warranty_description'];
    }

    /**
     * Sets manufacturer_parts_warranty_description.
     *
     * @param string $manufacturer_parts_warranty_description the manufacturer parts warranty description attribute of the item
     *
     * @return $this
     */
    public function setManufacturerPartsWarrantyDescription($manufacturer_parts_warranty_description)
    {
        $this->container['manufacturer_parts_warranty_description'] = $manufacturer_parts_warranty_description;

        return $this;
    }

    /**
     * Gets material_type.
     *
     * @return string[]
     */
    public function getMaterialType()
    {
        return $this->container['material_type'];
    }

    /**
     * Sets material_type.
     *
     * @param string[] $material_type the material type attributes of the item
     *
     * @return $this
     */
    public function setMaterialType($material_type)
    {
        $this->container['material_type'] = $material_type;

        return $this;
    }

    /**
     * Gets maximum_resolution.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getMaximumResolution()
    {
        return $this->container['maximum_resolution'];
    }

    /**
     * Sets maximum_resolution.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $maximum_resolution maximum_resolution
     *
     * @return $this
     */
    public function setMaximumResolution($maximum_resolution)
    {
        $this->container['maximum_resolution'] = $maximum_resolution;

        return $this;
    }

    /**
     * Gets media_type.
     *
     * @return string[]
     */
    public function getMediaType()
    {
        return $this->container['media_type'];
    }

    /**
     * Sets media_type.
     *
     * @param string[] $media_type the media type attributes of the item
     *
     * @return $this
     */
    public function setMediaType($media_type)
    {
        $this->container['media_type'] = $media_type;

        return $this;
    }

    /**
     * Gets metal_stamp.
     *
     * @return string
     */
    public function getMetalStamp()
    {
        return $this->container['metal_stamp'];
    }

    /**
     * Sets metal_stamp.
     *
     * @param string $metal_stamp the metal stamp attribute of the item
     *
     * @return $this
     */
    public function setMetalStamp($metal_stamp)
    {
        $this->container['metal_stamp'] = $metal_stamp;

        return $this;
    }

    /**
     * Gets metal_type.
     *
     * @return string
     */
    public function getMetalType()
    {
        return $this->container['metal_type'];
    }

    /**
     * Sets metal_type.
     *
     * @param string $metal_type the metal type attribute of the item
     *
     * @return $this
     */
    public function setMetalType($metal_type)
    {
        $this->container['metal_type'] = $metal_type;

        return $this;
    }

    /**
     * Gets model.
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model.
     *
     * @param string $model the model attribute of the item
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets number_of_discs.
     *
     * @return int
     */
    public function getNumberOfDiscs()
    {
        return $this->container['number_of_discs'];
    }

    /**
     * Sets number_of_discs.
     *
     * @param int $number_of_discs the number of discs attribute of the item
     *
     * @return $this
     */
    public function setNumberOfDiscs($number_of_discs)
    {
        $this->container['number_of_discs'] = $number_of_discs;

        return $this;
    }

    /**
     * Gets number_of_issues.
     *
     * @return int
     */
    public function getNumberOfIssues()
    {
        return $this->container['number_of_issues'];
    }

    /**
     * Sets number_of_issues.
     *
     * @param int $number_of_issues the number of issues attribute of the item
     *
     * @return $this
     */
    public function setNumberOfIssues($number_of_issues)
    {
        $this->container['number_of_issues'] = $number_of_issues;

        return $this;
    }

    /**
     * Gets number_of_items.
     *
     * @return int
     */
    public function getNumberOfItems()
    {
        return $this->container['number_of_items'];
    }

    /**
     * Sets number_of_items.
     *
     * @param int $number_of_items the number of items attribute of the item
     *
     * @return $this
     */
    public function setNumberOfItems($number_of_items)
    {
        $this->container['number_of_items'] = $number_of_items;

        return $this;
    }

    /**
     * Gets number_of_pages.
     *
     * @return int
     */
    public function getNumberOfPages()
    {
        return $this->container['number_of_pages'];
    }

    /**
     * Sets number_of_pages.
     *
     * @param int $number_of_pages the number of pages attribute of the item
     *
     * @return $this
     */
    public function setNumberOfPages($number_of_pages)
    {
        $this->container['number_of_pages'] = $number_of_pages;

        return $this;
    }

    /**
     * Gets number_of_tracks.
     *
     * @return int
     */
    public function getNumberOfTracks()
    {
        return $this->container['number_of_tracks'];
    }

    /**
     * Sets number_of_tracks.
     *
     * @param int $number_of_tracks the number of tracks attribute of the item
     *
     * @return $this
     */
    public function setNumberOfTracks($number_of_tracks)
    {
        $this->container['number_of_tracks'] = $number_of_tracks;

        return $this;
    }

    /**
     * Gets operating_system.
     *
     * @return string[]
     */
    public function getOperatingSystem()
    {
        return $this->container['operating_system'];
    }

    /**
     * Sets operating_system.
     *
     * @param string[] $operating_system the operating system attributes of the item
     *
     * @return $this
     */
    public function setOperatingSystem($operating_system)
    {
        $this->container['operating_system'] = $operating_system;

        return $this;
    }

    /**
     * Gets optical_zoom.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getOpticalZoom()
    {
        return $this->container['optical_zoom'];
    }

    /**
     * Sets optical_zoom.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $optical_zoom optical_zoom
     *
     * @return $this
     */
    public function setOpticalZoom($optical_zoom)
    {
        $this->container['optical_zoom'] = $optical_zoom;

        return $this;
    }

    /**
     * Gets package_dimensions.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DimensionType
     */
    public function getPackageDimensions()
    {
        return $this->container['package_dimensions'];
    }

    /**
     * Sets package_dimensions.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DimensionType $package_dimensions package_dimensions
     *
     * @return $this
     */
    public function setPackageDimensions($package_dimensions)
    {
        $this->container['package_dimensions'] = $package_dimensions;

        return $this;
    }

    /**
     * Gets package_quantity.
     *
     * @return int
     */
    public function getPackageQuantity()
    {
        return $this->container['package_quantity'];
    }

    /**
     * Sets package_quantity.
     *
     * @param int $package_quantity the package quantity attribute of the item
     *
     * @return $this
     */
    public function setPackageQuantity($package_quantity)
    {
        $this->container['package_quantity'] = $package_quantity;

        return $this;
    }

    /**
     * Gets part_number.
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number.
     *
     * @param string $part_number the part number attribute of the item
     *
     * @return $this
     */
    public function setPartNumber($part_number)
    {
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets pegi_rating.
     *
     * @return string
     */
    public function getPegiRating()
    {
        return $this->container['pegi_rating'];
    }

    /**
     * Sets pegi_rating.
     *
     * @param string $pegi_rating the PEGI rating attribute of the item
     *
     * @return $this
     */
    public function setPegiRating($pegi_rating)
    {
        $this->container['pegi_rating'] = $pegi_rating;

        return $this;
    }

    /**
     * Gets platform.
     *
     * @return string[]
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform.
     *
     * @param string[] $platform the platform attributes of the item
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets processor_count.
     *
     * @return int
     */
    public function getProcessorCount()
    {
        return $this->container['processor_count'];
    }

    /**
     * Sets processor_count.
     *
     * @param int $processor_count the processor count attribute of the item
     *
     * @return $this
     */
    public function setProcessorCount($processor_count)
    {
        $this->container['processor_count'] = $processor_count;

        return $this;
    }

    /**
     * Gets product_group.
     *
     * @return string
     */
    public function getProductGroup()
    {
        return $this->container['product_group'];
    }

    /**
     * Sets product_group.
     *
     * @param string $product_group the product group attribute of the item
     *
     * @return $this
     */
    public function setProductGroup($product_group)
    {
        $this->container['product_group'] = $product_group;

        return $this;
    }

    /**
     * Gets product_type_name.
     *
     * @return string
     */
    public function getProductTypeName()
    {
        return $this->container['product_type_name'];
    }

    /**
     * Sets product_type_name.
     *
     * @param string $product_type_name the product type name attribute of the item
     *
     * @return $this
     */
    public function setProductTypeName($product_type_name)
    {
        $this->container['product_type_name'] = $product_type_name;

        return $this;
    }

    /**
     * Gets product_type_subcategory.
     *
     * @return string
     */
    public function getProductTypeSubcategory()
    {
        return $this->container['product_type_subcategory'];
    }

    /**
     * Sets product_type_subcategory.
     *
     * @param string $product_type_subcategory the product type subcategory attribute of the item
     *
     * @return $this
     */
    public function setProductTypeSubcategory($product_type_subcategory)
    {
        $this->container['product_type_subcategory'] = $product_type_subcategory;

        return $this;
    }

    /**
     * Gets publication_date.
     *
     * @return string
     */
    public function getPublicationDate()
    {
        return $this->container['publication_date'];
    }

    /**
     * Sets publication_date.
     *
     * @param string $publication_date the publication date attribute of the item
     *
     * @return $this
     */
    public function setPublicationDate($publication_date)
    {
        $this->container['publication_date'] = $publication_date;

        return $this;
    }

    /**
     * Gets publisher.
     *
     * @return string
     */
    public function getPublisher()
    {
        return $this->container['publisher'];
    }

    /**
     * Sets publisher.
     *
     * @param string $publisher the publisher attribute of the item
     *
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->container['publisher'] = $publisher;

        return $this;
    }

    /**
     * Gets region_code.
     *
     * @return string
     */
    public function getRegionCode()
    {
        return $this->container['region_code'];
    }

    /**
     * Sets region_code.
     *
     * @param string $region_code the region code attribute of the item
     *
     * @return $this
     */
    public function setRegionCode($region_code)
    {
        $this->container['region_code'] = $region_code;

        return $this;
    }

    /**
     * Gets release_date.
     *
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->container['release_date'];
    }

    /**
     * Sets release_date.
     *
     * @param string $release_date the release date attribute of the item
     *
     * @return $this
     */
    public function setReleaseDate($release_date)
    {
        $this->container['release_date'] = $release_date;

        return $this;
    }

    /**
     * Gets ring_size.
     *
     * @return string
     */
    public function getRingSize()
    {
        return $this->container['ring_size'];
    }

    /**
     * Sets ring_size.
     *
     * @param string $ring_size the ring size attribute of the item
     *
     * @return $this
     */
    public function setRingSize($ring_size)
    {
        $this->container['ring_size'] = $ring_size;

        return $this;
    }

    /**
     * Gets running_time.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getRunningTime()
    {
        return $this->container['running_time'];
    }

    /**
     * Sets running_time.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $running_time running_time
     *
     * @return $this
     */
    public function setRunningTime($running_time)
    {
        $this->container['running_time'] = $running_time;

        return $this;
    }

    /**
     * Gets shaft_material.
     *
     * @return string
     */
    public function getShaftMaterial()
    {
        return $this->container['shaft_material'];
    }

    /**
     * Sets shaft_material.
     *
     * @param string $shaft_material the shaft material attribute of the item
     *
     * @return $this
     */
    public function setShaftMaterial($shaft_material)
    {
        $this->container['shaft_material'] = $shaft_material;

        return $this;
    }

    /**
     * Gets scent.
     *
     * @return string
     */
    public function getScent()
    {
        return $this->container['scent'];
    }

    /**
     * Sets scent.
     *
     * @param string $scent the scent attribute of the item
     *
     * @return $this
     */
    public function setScent($scent)
    {
        $this->container['scent'] = $scent;

        return $this;
    }

    /**
     * Gets season_sequence.
     *
     * @return string
     */
    public function getSeasonSequence()
    {
        return $this->container['season_sequence'];
    }

    /**
     * Sets season_sequence.
     *
     * @param string $season_sequence the season sequence attribute of the item
     *
     * @return $this
     */
    public function setSeasonSequence($season_sequence)
    {
        $this->container['season_sequence'] = $season_sequence;

        return $this;
    }

    /**
     * Gets seikodo_product_code.
     *
     * @return string
     */
    public function getSeikodoProductCode()
    {
        return $this->container['seikodo_product_code'];
    }

    /**
     * Sets seikodo_product_code.
     *
     * @param string $seikodo_product_code the Seikodo product code attribute of the item
     *
     * @return $this
     */
    public function setSeikodoProductCode($seikodo_product_code)
    {
        $this->container['seikodo_product_code'] = $seikodo_product_code;

        return $this;
    }

    /**
     * Gets size.
     *
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param string $size the size attribute of the item
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets size_per_pearl.
     *
     * @return string
     */
    public function getSizePerPearl()
    {
        return $this->container['size_per_pearl'];
    }

    /**
     * Sets size_per_pearl.
     *
     * @param string $size_per_pearl the size per pearl attribute of the item
     *
     * @return $this
     */
    public function setSizePerPearl($size_per_pearl)
    {
        $this->container['size_per_pearl'] = $size_per_pearl;

        return $this;
    }

    /**
     * Gets small_image.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\Image
     */
    public function getSmallImage()
    {
        return $this->container['small_image'];
    }

    /**
     * Sets small_image.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\Image $small_image small_image
     *
     * @return $this
     */
    public function setSmallImage($small_image)
    {
        $this->container['small_image'] = $small_image;

        return $this;
    }

    /**
     * Gets studio.
     *
     * @return string
     */
    public function getStudio()
    {
        return $this->container['studio'];
    }

    /**
     * Sets studio.
     *
     * @param string $studio the studio attribute of the item
     *
     * @return $this
     */
    public function setStudio($studio)
    {
        $this->container['studio'] = $studio;

        return $this;
    }

    /**
     * Gets subscription_length.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getSubscriptionLength()
    {
        return $this->container['subscription_length'];
    }

    /**
     * Sets subscription_length.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $subscription_length subscription_length
     *
     * @return $this
     */
    public function setSubscriptionLength($subscription_length)
    {
        $this->container['subscription_length'] = $subscription_length;

        return $this;
    }

    /**
     * Gets system_memory_size.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getSystemMemorySize()
    {
        return $this->container['system_memory_size'];
    }

    /**
     * Sets system_memory_size.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $system_memory_size system_memory_size
     *
     * @return $this
     */
    public function setSystemMemorySize($system_memory_size)
    {
        $this->container['system_memory_size'] = $system_memory_size;

        return $this;
    }

    /**
     * Gets system_memory_type.
     *
     * @return string
     */
    public function getSystemMemoryType()
    {
        return $this->container['system_memory_type'];
    }

    /**
     * Sets system_memory_type.
     *
     * @param string $system_memory_type the system memory type attribute of the item
     *
     * @return $this
     */
    public function setSystemMemoryType($system_memory_type)
    {
        $this->container['system_memory_type'] = $system_memory_type;

        return $this;
    }

    /**
     * Gets theatrical_release_date.
     *
     * @return string
     */
    public function getTheatricalReleaseDate()
    {
        return $this->container['theatrical_release_date'];
    }

    /**
     * Sets theatrical_release_date.
     *
     * @param string $theatrical_release_date the theatrical release date attribute of the item
     *
     * @return $this
     */
    public function setTheatricalReleaseDate($theatrical_release_date)
    {
        $this->container['theatrical_release_date'] = $theatrical_release_date;

        return $this;
    }

    /**
     * Gets title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title.
     *
     * @param string $title the title attribute of the item
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets total_diamond_weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getTotalDiamondWeight()
    {
        return $this->container['total_diamond_weight'];
    }

    /**
     * Sets total_diamond_weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $total_diamond_weight total_diamond_weight
     *
     * @return $this
     */
    public function setTotalDiamondWeight($total_diamond_weight)
    {
        $this->container['total_diamond_weight'] = $total_diamond_weight;

        return $this;
    }

    /**
     * Gets total_gem_weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits
     */
    public function getTotalGemWeight()
    {
        return $this->container['total_gem_weight'];
    }

    /**
     * Sets total_gem_weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\DecimalWithUnits $total_gem_weight total_gem_weight
     *
     * @return $this
     */
    public function setTotalGemWeight($total_gem_weight)
    {
        $this->container['total_gem_weight'] = $total_gem_weight;

        return $this;
    }

    /**
     * Gets warranty.
     *
     * @return string
     */
    public function getWarranty()
    {
        return $this->container['warranty'];
    }

    /**
     * Sets warranty.
     *
     * @param string $warranty the warranty attribute of the item
     *
     * @return $this
     */
    public function setWarranty($warranty)
    {
        $this->container['warranty'] = $warranty;

        return $this;
    }

    /**
     * Gets weee_tax_value.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\Price
     */
    public function getWeeeTaxValue()
    {
        return $this->container['weee_tax_value'];
    }

    /**
     * Sets weee_tax_value.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\Price $weee_tax_value weee_tax_value
     *
     * @return $this
     */
    public function setWeeeTaxValue($weee_tax_value)
    {
        $this->container['weee_tax_value'] = $weee_tax_value;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
