<?php

//DATA AKUN
$useragent = 'user-agent: Mozilla/5.0 (Linux; Android 9; SAMSUNG SM-J530Y) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/13.2 Chrome/83.0.4103.106 Mobile Safari/537.36';
$xcsrftoken = 'x-csrftoken: lbm7mnOMRBS8xDqOirdp1zoqelSzBioW';
$contentype = 'content-type: application/json';


// DATA FLASH SALE 
// YANG DIBUBAH PERTAMA
// UBAH MULAI DARI HTTPS
$referprduk = "referer: https://shopee.co.id/BTS-BE-MEMBER-ED-V-VER-i.52761944.4160505046";

// UBAH PERTAMA KEDUA
// COPY SHOPID DAN ITEMID DARI REFER
$flashsalettime = "https://shopee.co.id/api/v2/item/get?itemid=4160505046&shopid=52761944";

// YANG DI UBAH KETIGA 
// SHOPID, ITEMID, MODELID
// JALANKAN SAVE.PHP UNTUK MENDAPATKAN
$dataaddtocart = '{
  "quantity": 1,
  "checkout": true,
  "update_checkout_only": false,
  "donot_add_quantity": false,
  "source": "",
  "client_source": 1,
  "shopid": 52761944,
  "itemid": 4160505046,
  "modelid": 41633670180
}';

// YANG DI UBAH KE EMPAT
// SHOPID, ITEMID, MODELID, PRICE BARANG
$selectedorder = '{
  "selected_shop_order_ids": [
    {
      "shopid": 52761944,
      "item_briefs": [
        {
          "itemid": 4160505046,
          "modelid": 41633670180,
          "item_group_id": null,
          "applied_promotion_id": 0,
          "offerid": null,
          "price": 800000000,
          "quantity": 1,
          "is_add_on_sub_item": null,
          "add_on_deal_id": null,
          "status": 1,
          "cart_item_change_time": 1612575339
        }
      ],
      "shop_vouchers": []
    }
  ],
  "platform_vouchers": [],
  "free_shipping_voucher_info": {
    "free_shipping_voucher_id": 0
  },
  "use_coins": false
}';

// JANGAN LUPA DI UBAH PLACE ORDER 
// HARGA
// TOTAL HARGA 2009900000 9900000
// TOTAL HARGA + 1000
// SHOPID , ITEMID , MODELID
$datacheckout = '{
  "status": 200,
  "headers": {},
  "cart_type": 0,
  "shipping_orders": [
    {
      "selected_logistic_channelid": 80088,
      "cod_fee": 0,
      "order_total": 2600000000,
      "shipping_id": 1,
      "shopee_shipping_discount_id": 246193,
      "selected_logistic_channelid_with_warning": null,
      "shipping_fee_discount": 0,
      "shipping_group_description": "",
      "selected_preferred_delivery_time_option_id": 0,
      "buyer_remark": null,
      "buyer_address_data": {
        "tax_address": "",
        "error_status": "",
        "address_type": 0,
        "addressid": 30889769
      },
      "order_total_without_shipping": 800000000,
      "tax_payable": 0,
      "amount_detail": {
        "BASIC_SHIPPING_FEE": 1800000000,
        "SELLER_ESTIMATED_INSURANCE_FEE": 0,
        "SHOPEE_OR_SELLER_SHIPPING_DISCOUNT": -1800000000,
        "VOUCHER_DISCOUNT": 0,
        "SHIPPING_DISCOUNT_BY_SELLER": 0,
        "SELLER_ESTIMATED_BASIC_SHIPPING_FEE": 0,
        "SHIPPING_DISCOUNT_BY_SHOPEE": 1800000000,
        "INSURANCE_FEE": 0,
        "ITEM_TOTAL": 800000000,
        "TAX_EXEMPTION": 0,
        "shop_promo_only": true,
        "COD_FEE": 0,
        "TAX_FEE": 0,
        "SELLER_ONLY_SHIPPING_DISCOUNT": 0
      },
      "buyer_ic_number": null,
      "fulfillment_info": {
        "fulfillment_flag": 64,
        "fulfillment_source": "",
        "managed_by_sbs": false,
        "order_fulfillment_type": 2,
        "warehouse_address_id": 0
      },
      "voucher_wallet_checking_channel_ids": [
        80088,
        80014
      ],
      "shoporder_indexes": [
        0
      ],
      "shipping_fee": 1800000000,
      "tax_exemption": 0,
      "shipping_group_icon": ""
    }
  ],
  "disabled_checkout_info": {
    "auto_popup": false,
    "description": "",
    "error_infos": []
  },
  "timestamp": 1612575473,
  "checkout_price_data": {
    "shipping_subtotal": 1800000000,
    "shipping_discount_subtotal": 0,
    "shipping_subtotal_before_discount": 1800000000,
    "bundle_deals_discount": null,
    "group_buy_discount": 0,
    "merchandise_subtotal": 800000000,
    "tax_payable": 0,
    "buyer_txn_fee": 100000000,
    "credit_card_promotion": null,
    "promocode_applied": null,
    "shopee_coins_redeemed": null,
    "total_payable": 2700000000,
    "tax_exemption": 0
  },
  "client_id": 0,
  "promotion_data": {
    "promotion_msg": "",
    "price_discount": 0,
    "can_use_coins": true,
    "voucher_info": {
      "coin_earned": 0,
      "promotionid": 0,
      "discount_percentage": 0,
      "discount_value": 0,
      "voucher_code": null,
      "reward_type": 0,
      "coin_percentage": 0,
      "used_price": 0
    },
    "coin_info": {
      "coin_offset": 42000000,
      "coin_earn": 0,
      "coin_earn_by_voucher": 0,
      "coin_used": 420
    },
    "free_shipping_voucher_info": {
      "free_shipping_voucher_id": 0,
      "disabled_reason": null,
      "free_shipping_voucher_code": ""
    },
    "applied_voucher_code": null,
    "shop_voucher_entrances": [
      {
        "status": true,
        "shopid": 52761944
      }
    ],
    "card_promotion_enabled": false,
    "invalid_message": null,
    "card_promotion_id": null,
    "voucher_code": null,
    "use_coins": false
  },
  "dropshipping_info": {
    "phone_number": "",
    "enabled": false,
    "name": ""
  },
  "selected_payment_channel_data": {
    "channel_id": 8005200,
    "channel_item_option_info": {
      "option_info": "89052001"
    },
    "version": 2
  },
  "shoporders": [
    {
      "shop": {
        "remark_type": 0,
        "support_ereceipt": false,
        "images": "",
        "is_official_shop": false,
        "cb_option": false,
        "shopid": 52761944,
        "shop_name": "ATEA SHOP"
      },
      "buyer_remark": null,
      "shipping_fee": 1800000000,
      "order_total": 2600000000,
      "shipping_id": 1,
      "buyer_ic_number": null,
      "items": [
        {
          "itemid": 4160505046,
          "is_add_on_sub_item": false,
          "image": "e1feaaa30ac2243436d9f94593170f34",
          "shopid": 52761944,
          "opc_extra_data": {
            "slash_price_activity_id": 0
          },
          "promotion_id": 0,
          "add_on_deal_id": 0,
          "modelid": 41633670180,
          "offerid": 0,
          "source": "",
          "checkout": true,
          "item_group_id": 0,
          "service_by_shopee_flag": false,
          "none_shippable_full_reason": "",
          "price": 800000000,
          "is_flash_sale": false,
          "categories": [
            {
              "catids": [
                42,
                18128,
                18129
              ]
            }
          ],
          "shippable": true,
          "name": "BTS BE MEMBER ED V VER",
          "none_shippable_reason": "",
          "is_pre_order": false,
          "stock": 0,
          "model_name": "",
          "quantity": 1
        }
      ],
      "selected_preferred_delivery_time_option_id": 0,
      "selected_logistic_channelid": 80088,
      "cod_fee": 0,
      "tax_payable": 0,
      "buyer_address_data": {
        "tax_address": "",
        "error_status": "",
        "address_type": 0,
        "addressid": 30889769
      },
      "shipping_fee_discount": 0,
      "order_total_without_shipping": 800000000,
      "tax_exemption": 0,
      "amount_detail": {
        "BASIC_SHIPPING_FEE": 1800000000,
        "COD_FEE": 0,
        "SHOPEE_OR_SELLER_SHIPPING_DISCOUNT": -1800000000,
        "VOUCHER_DISCOUNT": 0,
        "SHIPPING_DISCOUNT_BY_SELLER": 0,
        "SELLER_ESTIMATED_INSURANCE_FEE": 0,
        "SELLER_ESTIMATED_BASIC_SHIPPING_FEE": 0,
        "SHIPPING_DISCOUNT_BY_SHOPEE": 1800000000,
        "INSURANCE_FEE": 0,
        "ITEM_TOTAL": 800000000,
        "TAX_EXEMPTION": 0,
        "shop_promo_only": true,
        "TAX_FEE": 0,
        "SELLER_ONLY_SHIPPING_DISCOUNT": 0
      },
      "ext_ad_info_mappings": []
    }
  ],
  "can_checkout": true,
  "order_update_info": {},
  "buyer_txn_fee_info": {
    "learn_more_url": "https://shopee.co.id/events3/code/634289435/",
    "description": "Besar biaya penanganan adalah Rp 1.000 dari total transaksi.",
    "title": "Biaya Penanganan"
  }
}';











// DATA REFERAL TIDAK PERLU DI GANTI
$referplace = 'referer: https://shopee.co.id/checkout?state=H8KLCAAAAAAAAAPDnVTDi8KOw6MgEMO8F8OOPsOYScOsJMO%2BwpVRwoQwwrQTNBhYHlHCrFHDvn0bY8Kcw4xKwqM9w61lwpVDw6gXVV3DncO4wosEOcKBD2zCssKkb8K6ZsOXHsObw4NxXxF%2FM8OWOAHDjsKTw77Do2sxScKfw7%2FCpSB9wrs7dsONw7lweFZEBsKYclI6wqXDoMKhw6nDqhZ%2FwofCriLCkxHCoFbDp37Dnx3Dq8OmVFfChAlBwo3CpgLCmMKiKcKILsOpw6nDqsO1ccKgw6kqw5LCj0x5w4gIw7TDqkzCtCXDuVdkOsOIMCPDp8OnwqUiw4pcwqUPwpLDu0TDkQE3w5MEWsKAwqDDvMOGwrROw7gYw5FRKcKkO8OEGVzCgnLDoD0VLMKwVBTDmMKjw7hIT0hFw4A5w6MoChPDosOqKSVhwrbCsMKQWB3CicOSwr4%2Bwp3DjsOHw67CjMO3e1DDgANiF1IvEsKkP8OVwpjCmMOEwpXDlkp9XcOaacOeasKswoMRwpHDscKUVMK7woPCm2nCmg81NkhUZsOtw77Cr8OpXsKZwrAkLz1fw54rw5jCjMOSwoTDgmnDq8K%2Fw5grw4l2VyPDjsOmTMO6Fwp6NMKpw6DCm0lOw6fCpcKkISgAw5LDsBgiw70ODcOrw4xkwpbDjMKCFD1QbsKkw7bDm3hHB0jCuUhyN8KRw59wQgXDqMKHaFZCSMOPBsKFfTlgPmHCpsKGf8K6wpHDoyrCplEmWsKKwoXDkcK4wqnDhMOSw75ew7LDksO%2Fw6HDgiPDv8Kkw68BworDujnCpjnCvDpgMRjDisKsVcOzwrfDjDXCjngCw67CksODw5ZTMUXDnsKsw5UcwpEsOMOrwqQOw5kfwozCvsKKwqjDqcKgGMO%2FHMOMI3vDswLCl0HCrlc%2BEcKEMxdew5vDicKVXMOiWcKowrTDnwV9OcKLVQnDocKMfcKtw6PCmmFvRgPDlXEaUhPDi3PDkMKLw45bw4fCmk1Fw4vCrcO6w71zMWtOw7rDoCLDvAfCj8KzfAlRHgHCjzTDtsKPw7pSwrjDohVFwqfCvHvDv8O8LWcuw5HCojrDsBrDv2%2FDvcKww6tcw4kFAAA%3D';
$refernextcart = 'referer: https://shopee.co.id/cart';
$linkcart = 'https://shopee.co.id/api/v2/cart/add_to_cart';
$linkcheckout = 'https://shopee.co.id/api/v4/cart/checkout';
$linkplaceorder = 'https://shopee.co.id/api/v2/checkout/place_order';