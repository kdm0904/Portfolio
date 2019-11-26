package javabeans;

public class ChampBeans {
	
	private String champ;
	private int level;
	
	public String getChamp() {
		return champ;
	}

	public void setChamp(String champ) {
		this.champ = champ;
	}
	
	public int getLevel() {
		return level;
	}

	public void setLevel(int level) {
		this.level = level;
	}
	
	public String Akali() {
		this.level = level;
		int HP=575;
		double HPRecovery=8.0;
		int energy=200;
		int energyRecovery=50;
		double attack=62.4;
		double attackSpeed=0.625;
		double armour=23.0;
		double magicArmour= 37.0;
		int range=125;
		int speed=345;
		
		if(level>=1&&level<=18) {
			HP=HP+(95*(level-1));
			HPRecovery=HPRecovery+(0.5*(level-1));
			energy=energy;
			energyRecovery=energyRecovery;
			attack=attack+(3.3*(level-1));
			attackSpeed=attackSpeed*(1+0.032*(level-1));
			armour=armour+(3.5*(level-1));
			magicArmour=magicArmour+(1.25*(level-1));
			range=range;
			speed=speed;	
			return " 체력 = "+HP+" 체력회복 = "+HPRecovery+" 기력 = "+energy+" 기력회복 = "+energyRecovery
					+" 공격력 = "+attack+" 공격속도 = "+attackSpeed+" 방어력 = "+armour+" 마법저항력 = "+magicArmour+
					" 사거리 = "+range+" 이동속도 = "+speed;
					
		} else {
			return "18레벨이 만렙입니다";
		}
	}
	
	public String Garen() {
		this.level = level;
		int HP=620;
		double HPRecovery=8.0;
		double attack=66.;
		double attackSpeed=0.625;
		double armour=36.0;
		double magicArmour= 32.1;
		int range=175;
		int speed=340;
		
		if(level>=1&&level<=18) {
			HP=HP+(84*(level-1));
			HPRecovery=HPRecovery+(0.5*(level-1));
			attack=attack+(4.5*(level-1));
			attackSpeed=attackSpeed*(1+0.0365*(level-1));
			armour=armour+(3.0*(level-1));
			magicArmour=magicArmour+(1.25*(level-1));
			range=range;
			speed=speed;	
			return " 체력 = "+HP+" 체력회복 = "+HPRecovery+" 공격력 = "+attack+" 공격속도 = "+attackSpeed
					+" 방어력 = "+armour+" 마법저항력 = "+magicArmour+" 사거리  = "+range+" 이동속도 = "+speed;
					
		} else {
			return "18레벨이 만렙입니다";
		}
	}

	
	
}
