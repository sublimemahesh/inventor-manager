<?php

class Menu {

    public function getDataList() {
        $result = [
            "entities" =>
            [
                "customers" =>
                [
                    "add_customer",
                    "view_customers",
                    "view_customer",
                    "edit_customer",
                    "set_customer_payments_method"
                ],
                "items" =>
                [
                    "add_item",
                    "view_items",
                    "edit_item"
                ],
                "suppliers" =>
                [
                    "add_supplier",
                    "view_suppliers",
                    "edit_supplier"
                ],
                "brands" =>
                [
                    "add_brand",
                    "view_brands",
                    "edit_brand",
                ],
                "sales_reps" =>
                [
                    "add_sales_rep",
                    "view_sales_reps",
                    "edit_sales_rep"
                ],
                "routes" =>
                [
                    "add_route",
                    "view_routes",
                    "edit_route",
                ],
                "stocks" =>
                [
                    "add_stock",
                    "view_stocks",
                    "edit_stock",
                ],
                "banks" =>
                [
                    "add_bank",
                    "view_banks",
                    "edit_bank",
                ],
            ],
            "processes" => [
                "sales" =>
                [
                    "add_sale",
                    "view_sales",
                    "view_sale",
                    "delete_sale"
                ],
                "purchases" =>
                [
                    "add_purchases",
                    "view_purchases",
                    "view_purchase",
                    "delete_purchase"
                ],
                "loadings" =>
                [
                    "add_loading",
                    "view_loadings",
                    "view_loading"
                ],
                "customers_payments" =>
                [
                    "add_customers_payment",
                    "view_customers_payments",
                    "delete_customers_payment",
                ],
                "company_payments" =>
                [
                    "add_company_payment",
                    "view_company_payments",
                ],
                "transfers" =>
                [
                    "add_transfer",
                    "view_transfers",
                    "view_transfer"
                ],
                "expenses" =>
                [
                    "add_expenses",
                    "view_expenses",
                    "view_expense",
                    "delete_expenses"
                ],
            ],
            "reports" => [
                "selling_items_report",
                "purchase_items_report",
                "stocks_report",
                "customers_payments_report",
                "customers_arrears_report",
                "lost_and_profit_report"
            ],
            "settings" => [
                "themes"
            ],
            "users" => [
                "view_user",
                "add_new_user",
                "edit_user"
            ]
        ];

        return $result;
    }

}
