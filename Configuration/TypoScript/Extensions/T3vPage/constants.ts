# === T3v Page Constants ===

plugin {
  tx_t3vpage {
    persistence {
      # cat=plugin/tx_t3vpage/persistence; type=int+; label=The PID of the storage
      # storagePid = 0
    }

    view {
      # cat=plugin/tx_t3vpage/view; type=string; label=Path to layouts
      layoutRootPath = EXT:t3v_page/Resources/Private/Layouts/

      # cat=plugin/tx_t3vpage/view; type=string; label=Path to templates
      templateRootPath = EXT:t3v_page/Resources/Private/Templates/

      # cat=plugin/tx_t3vpage/view; type=string; label=Path to template partials
      partialRootPath = EXT:t3v_page/Resources/Private/Partials/
    }

    settings {
      # ...
    }
  }
}