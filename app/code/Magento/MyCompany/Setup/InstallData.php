<?php
namespace Magento\MyCompany\Setup;

use Magento\Cms\Model\BlockFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    private $blockFactory;

    public function __construct(BlockFactory $blockFactory)
    {
        $this->blockFactory = $blockFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        // Block 1: PDP - Product Info Message
        $this->createBlock(
            'pdp_product_info_message',
            'PDP - Product Info Message',
            '<div class="product-info-message"><p>Get 4 interest-free payments of $196.25 with Klarna <a href="#">LEARN MORE</a></p>
             <p>Speak to a Personal Stylist <a href="#">CHAT NOW</a></p></div>'
        );

        // Block 2: PDP - View More Like This
        $this->createBlock(
            'pdp_view_more_like_this',
            'PDP - View More Like This',
            '<div class="view-more-like-this"><p>View more like this product:</p>
             <p><a href="#">Jonathan Simkhai</a>, <a href="#">Blazers</a>, <a href="#">Viscose</a></p></div>'
        );

        // Block 3: PDP - A Note from Editor
        $this->createBlock(
            'pdp_a_note_from_editor',
            'PDP - A Note from Editor',
            '<div class="editor-note"><p>A note from the editor:</p>
             <p>The Forte Lurex Linen Viscose Jacket in Mother of Pearl features lunar lavishness by night and by day: 
             a blazer in a linen blend shot with lurex for a shimmering surface that shines like a star in the sky.</p>
             <p class="line">By MINNA SHIM, Fashion Editor</p></div>'
        );

        $setup->endSetup();
    }

    private function createBlock($identifier, $title, $content)
    {
        $existingBlock = $this->blockFactory->create()->load($identifier, 'identifier');

        if (!$existingBlock->getId()) {
            $this->blockFactory->create()->setData([
                'title' => $title,
                'identifier' => $identifier,
                'is_active' => 1,
                'content' => $content
            ])->setStores([0])->save();
        }
    }
}
