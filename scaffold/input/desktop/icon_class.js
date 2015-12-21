/**
 * Created by csibi on 2014.08.29..
 */
desktop = {
    select: function (_model, _input, _field) {
        this.model = _model;
        this.input = _input;
        var field = _field;
        this.skip_change = false;

        var _revert = $(this.input).val();

        this.revert = function () {
            $(this.panel_input).val(_revert);
            return this;
        };
        this.return = function () {
            return $(this.panel_input).val();
        };

        this.edit = function () {
            var self = this;
            if (!this.panel_input.data("select2_init")) {
                this.panel_input.select2({
                    width: "350px",
                    tags: true,
                    tokenSeparators: [';']
                });
                this.panel_input.on("select2:selecting", function() {
                    if ($(self.model.inline_elem).find(".fa").length) {
                        $(self.model.inline_elem).find(".fa").removeClass($(this).val());
                    }
                }).on("select2:select", function() {
                    if ($(self.model.inline_elem).find(".fa").length) {
                        $(self.model.inline_elem).find(".fa").addClass($(this).val());
                    }
                });
                this.panel_input.data("select2_init", true);
            }
            if (this.inline_input) {
                this.inline_input.parent().find(".a_tags").hide();
                this.inline_input.next("span.select2").show();
                this.inline_input.show();
            }
        };

        this.browse = function () {
            if (this.inline_input) {
                this.inline_input.parent().find(".a_tags").show();
                this.inline_input.next("span.select2").hide();
                this.inline_input.hide();
            }
        };

        this.inline_value = function (value) {
            return this.get_value(this.inline_input, value);
        };
        this.panel_value = function (value) {
            return this.get_value(this.panel_input, value);
        };
        this.get_value = function (input, value) {
            var ret = false;
            var select = input;
            if (select && value) {
                if (!$.isArray(value)) {
                    value = [value];
                }
                $.each(value, function (key, val) {
                    var selected = val;
                    var found = false;
                    $.each(select.find("option"), function () {
                        if ($(this).val() == selected) {
                            $(this).attr("selected", true);
                            found = true;
                        }
                    });
                    if (!found) {
                        select.append('<option value="' + selected + '" selected="selected">' + selected + '</option>');
                    }
                });
                $.each(select.find("option"), function () {
                    if ($.inArray($(this).val(), value) === -1) {
                        $(this).attr("selected", false);
                    }
                });
                if (input.next("span.select2").length) {
                    input.trigger("change.select2");
                }
                ret = input.val();
            } else if (select) {
                ret = input.val();
            }
            return ret;
        };

        return this;
    }
};