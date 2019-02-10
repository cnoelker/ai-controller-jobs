<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2015-2018
 */

$enc = $this->encoder();

?>
<productlist>
	<?php foreach( $this->get( 'exportItems', [] ) as $id => $item ) : ?>
		<product-content id="<?php echo $enc->attr( $id ); ?>" >
			<productitem id="<?php echo $enc->attr( $id ); ?>" siteid="<?php echo $enc->attr( $item->getSiteId() ); ?>" ctime="<?php echo $enc->attr( $item->getTimeCreated() ); ?>" mtime="<?php echo $enc->attr( $item->getTimeModified() ); ?>" editor="<?php echo $enc->attr( $item->getEditor() ); ?>">
				<type><![CDATA[<?php echo $item->getType(); ?>]]></type>
				<code><![CDATA[<?php echo $item->getCode(); ?>]]></code>
				<label><![CDATA[<?php echo $item->getCode(); ?>]]></label>
				<start><![CDATA[<?php echo $item->getDateStart(); ?>]]></start>
				<end><![CDATA[<?php echo $item->getDateEnd(); ?>]]></end>
				<status><![CDATA[<?php echo $item->getStatus(); ?>]]></status>
			</productitem>
			<list>
				<text>
					<?php foreach( $item->getListItems( 'text' ) as $listItem ) : ?>
						<?php if ( $refItem = $listItem->getRefItem() ) { ?>
							<textitem id="<?php echo $enc->attr( $refItem->getId() ); ?>" siteid="<?php echo $enc->attr( $refItem->getSiteId() ); ?>" ctime="<?php echo $enc->attr( $refItem->getTimeCreated() ); ?>" mtime="<?php echo $enc->attr( $refItem->getTimeModified() ); ?>" editor="<?php echo $enc->attr( $refItem->getEditor() ); ?>" list.id="<?php echo $enc->attr( $listItem->getId() ); ?>" list.siteid="<?php echo $enc->attr( $listItem->getSiteId() ); ?>" list.parentid="<?php echo $enc->attr( $listItem->getParentId() ); ?>" list.type="<?php echo $enc->attr( $listItem->getType() ); ?>" list.domain="<?php echo $enc->attr( $listItem->getDomain() ); ?>" list.config="<?php echo $enc->attr( json_encode( $listItem->getConfig() ) ); ?>" list.start="<?php echo $enc->attr( $listItem->getDateStart() ); ?>" list.end="<?php echo $enc->attr( $listItem->getDateEnd() ); ?>" list.position="<?php echo $enc->attr( $listItem->getPosition() ); ?>" list.status="<?php echo $enc->attr( $listItem->getStatus() ); ?>" list.ctime="<?php echo $enc->attr( $listItem->getTimeCreated() ); ?>" list.mtime="<?php echo $enc->attr( $listItem->getTimeModified() ); ?>" list.editor="<?php echo $enc->attr( $listItem->getEditor() ); ?>">
								<type><![CDATA[<?php echo $refItem->getType(); ?>]]></type>
								<languageid><![CDATA[<?php echo $refItem->getLanguageId(); ?>]]></languageid>
								<label><![CDATA[<?php echo $refItem->getLabel(); ?>]]></label>
								<content><![CDATA[<?php echo $refItem->getLabel(); ?>]]></content>
								<status><![CDATA[<?php echo $refItem->getStatus(); ?>]]></status>
							</textitem>
						<?php } ?>
					<?php endforeach; ?>

				</text>
				<media>
					<?php foreach( $item->getListItems( 'media' ) as $listItem ) : ?>
						<?php if ( $refItem = $listItem->getRefItem() ) { ?>
							<mediaitem id="<?php echo $enc->attr( $refItem->getId() ); ?>" siteid="<?php echo $enc->attr( $refItem->getSiteId() ); ?>" ctime="<?php echo $enc->attr( $refItem->getTimeCreated() ); ?>" mtime="<?php echo $enc->attr( $refItem->getTimeModified() ); ?>" editor="<?php echo $enc->attr( $refItem->getEditor() ); ?>" list.id="<?php echo $enc->attr( $listItem->getId() ); ?>" list.siteid="<?php echo $enc->attr( $listItem->getSiteId() ); ?>" list.parentid="<?php echo $enc->attr( $listItem->getParentId() ); ?>" list.type="<?php echo $enc->attr( $listItem->getType() ); ?>" list.config="<?php echo $enc->attr( json_encode( $listItem->getConfig() ) ); ?>" list.start="<?php echo $enc->attr( $listItem->getDateStart() ); ?>" list.end="<?php echo $enc->attr( $listItem->getDateEnd() ); ?>" list.position="<?php echo $enc->attr( $listItem->getPosition() ); ?>" list.status="<?php echo $enc->attr( $listItem->getStatus() ); ?>" list.ctime="<?php echo $enc->attr( $listItem->getTimeCreated() ); ?>" list.mtime="<?php echo $enc->attr( $listItem->getTimeModified() ); ?>" list.editor="<?php echo $enc->attr( $listItem->getEditor() ); ?>">
								<type><![CDATA[<?php echo $refItem->getType(); ?>]]></type>
								<languageid><![CDATA[<?php echo $refItem->getLanguageId(); ?>]]></languageid>
								<label><![CDATA[<?php echo $refItem->getLabel(); ?>]]></label>
								<mimetype><![CDATA[<?php echo $refItem->getMimetype(); ?>]]></mimetype>
								<preview><![CDATA[<?php echo $refItem->getPreview(); ?>]]></preview>
								<url><![CDATA[<?php echo $refItem->getUrl(); ?>]]></url>
								<status><![CDATA[<?php echo $refItem->getStatus(); ?>]]></status>
							</mediaitem>
						<?php } ?>
					<?php endforeach; ?>

				</media>
				<price>
					<?php foreach( $item->getListItems( 'price' ) as $listItem ) : ?>
						<?php if ( $refItem = $listItem->getRefItem() ) { ?>
							<priceitem id="<?php echo $enc->attr( $refItem->getId() ); ?>" siteid="<?php echo $enc->attr( $refItem->getSiteId() ); ?>" ctime="<?php echo $enc->attr( $refItem->getTimeCreated() ); ?>" mtime="<?php echo $enc->attr( $refItem->getTimeModified() ); ?>" editor="<?php echo $enc->attr( $refItem->getEditor() ); ?>" list.id="<?php echo $enc->attr( $listItem->getId() ); ?>" list.siteid="<?php echo $enc->attr( $listItem->getSiteId() ); ?>" list.parentid="<?php echo $enc->attr( $listItem->getParentId() ); ?>" list.type="<?php echo $enc->attr( $listItem->getType() ); ?>" list.config="<?php echo $enc->attr( json_encode( $listItem->getConfig() ) ); ?>" list.start="<?php echo $enc->attr( $listItem->getDateStart() ); ?>" list.end="<?php echo $enc->attr( $listItem->getDateEnd() ); ?>" list.position="<?php echo $enc->attr( $listItem->getPosition() ); ?>" list.status="<?php echo $enc->attr( $listItem->getStatus() ); ?>" list.ctime="<?php echo $enc->attr( $listItem->getTimeCreated() ); ?>" list.mtime="<?php echo $enc->attr( $listItem->getTimeModified() ); ?>" list.editor="<?php echo $enc->attr( $listItem->getEditor() ); ?>">
								<type><![CDATA[<?php echo $refItem->getType(); ?>]]></type>
								<currencyid><![CDATA[<?php echo $refItem->getCurrencyId(); ?>]]></currencyid>
								<quantity><![CDATA[<?php echo $refItem->getQuantity(); ?>]]></quantity>
								<label><![CDATA[<?php echo $refItem->getLabel(); ?>]]></label>
								<value><![CDATA[<?php echo $refItem->getValue(); ?>]]></value>
								<costs><![CDATA[<?php echo $refItem->getCosts(); ?>]]></costs>
								<rebate><![CDATA[<?php echo $refItem->getRebate(); ?>]]></rebate>
								<taxrate><![CDATA[<?php echo $refItem->getTaxrate(); ?>]]></taxrate>
								<status><![CDATA[<?php echo $refItem->getStatus(); ?>]]></status>
							</priceitem>
						<?php } ?>
					<?php endforeach; ?>

				</price>
				<attribute>
					<?php foreach( $item->getListItems( 'attribute' ) as $listItem ) : ?>
						<?php if ( $refItem = $listItem->getRefItem() ) { ?>
							<attributeitem id="<?php echo $enc->attr( $refItem->getId() ); ?>" siteid="<?php echo $enc->attr( $refItem->getSiteId() ); ?>" ctime="<?php echo $enc->attr( $refItem->getTimeCreated() ); ?>" mtime="<?php echo $enc->attr( $refItem->getTimeModified() ); ?>" editor="<?php echo $enc->attr( $refItem->getEditor() ); ?>" list.id="<?php echo $enc->attr( $listItem->getId() ); ?>" list.siteid="<?php echo $enc->attr( $listItem->getSiteId() ); ?>" list.parentid="<?php echo $enc->attr( $listItem->getParentId() ); ?>" list.type="<?php echo $enc->attr( $listItem->getType() ); ?>" list.config="<?php echo $enc->attr( json_encode( $listItem->getConfig() ) ); ?>" list.start="<?php echo $enc->attr( $listItem->getDateStart() ); ?>" list.end="<?php echo $enc->attr( $listItem->getDateEnd() ); ?>" list.position="<?php echo $enc->attr( $listItem->getPosition() ); ?>" list.status="<?php echo $enc->attr( $listItem->getStatus() ); ?>" list.ctime="<?php echo $enc->attr( $listItem->getTimeCreated() ); ?>" list.mtime="<?php echo $enc->attr( $listItem->getTimeModified() ); ?>" list.editor="<?php echo $enc->attr( $listItem->getEditor() ); ?>">
								<type><![CDATA[<?php echo $refItem->getType(); ?>]]></type>
								<code><![CDATA[<?php echo $refItem->getCode(); ?>]]></code>
								<label><![CDATA[<?php echo $refItem->getLabel(); ?>]]></label>
								<position><![CDATA[<?php echo $refItem->getPosition(); ?>]]></position>
								<status><![CDATA[<?php echo $refItem->getStatus(); ?>]]></status>
							</attributeitem>
						<?php } ?>
					<?php endforeach; ?>

				</attribute>
				<product>
					<?php foreach( $item->getListItems( 'product' ) as $listItem ) : ?>
						<?php if ( $refItem = $listItem->getRefItem() ) { ?>
							<productitem id="<?php echo $enc->attr( $refItem->getId() ); ?>" siteid="<?php echo $enc->attr( $refItem->getSiteId() ); ?>" ctime="<?php echo $enc->attr( $refItem->getTimeCreated() ); ?>" mtime="<?php echo $enc->attr( $refItem->getTimeModified() ); ?>" editor="<?php echo $enc->attr( $refItem->getEditor() ); ?>" list.id="<?php echo $enc->attr( $listItem->getId() ); ?>" list.siteid="<?php echo $enc->attr( $listItem->getSiteId() ); ?>" list.parentid="<?php echo $enc->attr( $listItem->getParentId() ); ?>" list.type="<?php echo $enc->attr( $listItem->getType() ); ?>" list.config="<?php echo $enc->attr( json_encode( $listItem->getConfig() ) ); ?>" list.start="<?php echo $enc->attr( $listItem->getDateStart() ); ?>" list.end="<?php echo $enc->attr( $listItem->getDateEnd() ); ?>" list.position="<?php echo $enc->attr( $listItem->getPosition() ); ?>" list.status="<?php echo $enc->attr( $listItem->getStatus() ); ?>" list.ctime="<?php echo $enc->attr( $listItem->getTimeCreated() ); ?>" list.mtime="<?php echo $enc->attr( $listItem->getTimeModified() ); ?>" list.editor="<?php echo $enc->attr( $listItem->getEditor() ); ?>">
								<type><![CDATA[<?php echo $item->getType(); ?>]]></type>
								<code><![CDATA[<?php echo $item->getCode(); ?>]]></code>
								<label><![CDATA[<?php echo $item->getCode(); ?>]]></label>
								<start><![CDATA[<?php echo $item->getDateStart(); ?>]]></start>
								<end><![CDATA[<?php echo $item->getDateEnd(); ?>]]></end>
								<status><![CDATA[<?php echo $item->getStatus(); ?>]]></status>
							</productitem>
						<?php } ?>
					<?php endforeach; ?>

				</product>
			</list>
		</product-content>
	<?php endforeach; ?>

</productlist>
